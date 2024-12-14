import Footer from "@/Components/Public/Footer";
import { NavbarComponent } from "@/Components/Public/NavbarComponent";

export default function PublicLayout({ children }) {
    return (
        <>
            <NavbarComponent />
            <main>{children}</main>
            <Footer />
        </>
    );
}
