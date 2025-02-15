export default function PortfolioDetail({ title, text, link = "" }) {
  return (
    <div class="text-xl flex">
      <p class="font-bold">{title}</p>
      {link && (
        <a target="_blank" href={link}>
          <p class="pl-3">{text}</p>
        </a>
      )}
      {!link && <p class="pl-3">{text}</p>}
    </div>
  );
}
