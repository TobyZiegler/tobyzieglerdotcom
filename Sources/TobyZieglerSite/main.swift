/**
*  Page by Toby Ziegler
*  Created 2024-04-25
*  Updated 2024-04-26
*/

import Foundation
import Publish
import Plot

// This type acts as the configuration for your website.
struct TobyZieglerSite: Website {
    enum SectionID: String, WebsiteSectionID {
        // Add the sections that you want your website to contain here:
        case posts
        case about
        case dadabase
    }

    struct ItemMetadata: WebsiteItemMetadata {
        // Add any site-specific metadata that you want to use here.
    }

    // Update these properties to configure your website:
    var url = URL(string: "https://tobyziegler.com")!
    var name = "Toby Ziegler's Site"
    var description = "An experiment in web development using Swift"
    var language: Language { .english }
    var imagePath: Path? { nil }
}

// This uses Publish to generate the website:
try TobyZieglerSite().publish(withTheme: .tobyTheme)
