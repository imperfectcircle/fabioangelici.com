import { Link } from "@inertiajs/react";

export default function PortfolioCard({ data }) {
  return (
    data &&
    data.map((el, _) => (
      <Link href={el.link} key={_}>
        <img className="w-[400px]" src={el.image} alt={el.title} />
      </Link>
    ))
  );
}
