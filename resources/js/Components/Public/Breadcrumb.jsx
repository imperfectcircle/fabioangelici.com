import { ArrowRight } from "lucide-react";

import {
  Breadcrumb,
  BreadcrumbItem,
  BreadcrumbLink,
  BreadcrumbList,
  BreadcrumbPage,
  BreadcrumbSeparator,
} from "@/components/ui/breadcrumb";
import { usePage } from "@inertiajs/react";
import React from "react";

export function BreadcrumbComponent() {
  const { url } = usePage();
  const pathnames = url.split("/").filter((x) => x);
  return (
    <Breadcrumb>
      <BreadcrumbList>
        <BreadcrumbItem className="uppercase">
          <BreadcrumbLink href={route("public.home")}>Home</BreadcrumbLink>
        </BreadcrumbItem>
        {pathnames.map((el, index) => {
          const fullPath = `/${pathnames.slice(0, index + 1).join("/")}`;
          const isLast = index === pathnames.length - 1;

          return (
            <React.Fragment key={fullPath}>
              <BreadcrumbSeparator>
                <ArrowRight />
              </BreadcrumbSeparator>
              <BreadcrumbItem className="uppercase">
                {isLast ? (
                  <BreadcrumbPage className="text-light">{el}</BreadcrumbPage>
                ) : (
                  <BreadcrumbLink className="uppercase" href={fullPath}>
                    {el}
                  </BreadcrumbLink>
                )}
              </BreadcrumbItem>
            </React.Fragment>
          );
        })}
      </BreadcrumbList>
    </Breadcrumb>
  );
}
