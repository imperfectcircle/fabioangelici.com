import {
  HoverCard,
  HoverCardContent,
  HoverCardTrigger,
} from "@/Components/ui/hover-card";
import { useRef } from "react";

export default function HoverCardComponent({ customTrigger, content }) {
  const triggerRef = useRef(null);

  return (
    <HoverCard>
      <HoverCardTrigger ref={triggerRef}>{customTrigger}</HoverCardTrigger>
      <HoverCardContent className="bg-black text-white border-light">
        {content}
      </HoverCardContent>
    </HoverCard>
  );
}
