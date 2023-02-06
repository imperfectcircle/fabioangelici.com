<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaCkEditor\CkEditor as NovaCkEditorCkEditor;
use Waynestate\Nova\CKEditor4Field\CKEditor;

class Article extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Article>
     */
    public static $model = \App\Models\Article::class;

    public static function label() {
        return __('Articles');
    }

    public static function singularLabel()
    {
        return __('Article');
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'body'
    ];

    public static $perPageOptions = [50, 100, 150];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Slug::make('Slug', 'slug')
                ->from('title')
                ->required()
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]])
                ->hideFromIndex()
                ->showOnPreview(),
            Text::make('Titolo', 'title')
                ->required()
                ->showOnPreview()
                ->placeholder('Titolo dell\' articolo')
                ->sortable(),
            Text::make('Descrizione', 'description')
                ->required()
                ->placeholder('Inserisci la descrizione')
                ->sortable(),
            NovaCkEditorCkEditor::make('Corpo', 'body')
                ->required()
                ->showOnPreview(),
            Boolean::make('Pubblicato', 'is_published')
                ->showOnPreview()
                ->sortable(),
            HasOne::make('Picture')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
