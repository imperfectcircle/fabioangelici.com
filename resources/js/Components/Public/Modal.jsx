import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogTitle,
} from "@/Components/ui/dialog";
import ContactForm from "./ContactForm";

export default function Modal({ isOpen, onClose, title }) {
  return (
    <Dialog open={isOpen} onOpenChange={onClose} modal>
      <DialogContent className="max-w-7xl max-h-[80vh] overflow-y-auto scrollbar-thin scrollbar-track-dark scrollbar-thumb-light">
        <DialogTitle></DialogTitle>
        <DialogDescription></DialogDescription>
        {isOpen && (
          <ContactForm
            select={false}
            route={route("public.contact.offers")}
            title={title}
          />
        )}
      </DialogContent>
    </Dialog>
  );
}
