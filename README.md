# OUTSINC

## About OUTSINC

### Name & Meaning
- **OUTSINC**: Outreach Someone IN Change
- Highlighting the commitment to meet individuals “where they are” and facilitate positive life changes.

### Founders & Structure
- Founded by Chance (Ace) Brown & London
- Volunteer-based, non-profit outreach collective in Cobourg, Ontario
- Grassroots-funded via small grants, community donations, and in-kind support

### Philosophy
- **Low-Barrier & Non-Judgmental**: Everyone welcome without stigma.
- **Person-Centered & Empowering**: Clients set personal goals.
- **Collaborative**: Partnerships with shelters, health clinics, mental health agencies, Indigenous supports, municipal services.

## Mission, Vision & Values

### Mission
- Provide comprehensive, compassionate outreach and essential support (harm reduction, mental health, housing navigation, community connection).

### Vision
- A community where everyone has reliable access to basic needs and lasting stability.

### Core Values
- Dignity & Respect
- Self-Determination
- Accountability & Transparency
- Collaboration
- Advocacy

## Key Services & Programs

### Street Outreach & Harm Reduction
- Distribution of harm reduction supplies (needles, pipes, naloxone)
- Education on safer consumption and overdose prevention
- Crisis intervention support

### Mental Health Support & Referral
- Brief counseling, peer support
- Warm referrals to local services
- Psychoeducation workshops (coping skills, boundary setting)

### Housing Navigation & Stabilization
- Housing application assistance
- Tenant education sessions
- Move-in kits

### Addiction Recovery Support
- Peer-led support groups
- Connections to detox and treatment programs
- Aftercare planning & relapse prevention coaching

### Community Connection & Resource Hub
- Directory of community services
- “Resource Roundtable” events
- Smartphone lending program

### Training & Capacity Building
- Harm reduction workshops
- Naloxone-certification sessions
- Student placements and volunteer training (trauma-informed care)

## Digital Platform & Dashboard Features

### Intake & Case Management
- Simple online intake (first & last name required; optional demographics)
- Customizable client profiles

### Communication Hub
- Secure messaging between outreach workers, clients, agencies
- Automated appointment reminders

### Task & Appointment Dashboard
- Quick-action buttons (“New Client”, “Schedule Visit”)
- Widgets for follow-ups and upcoming appointments

### Reporting & Analytics
- Real-time data tracking (supplies, referrals, housing placements)
- Monthly impact reports

### Team Collaboration Tools
- Shared case notes
- Role-based access management (admins, outreach staff, liaisons)

## Organizational Roles & Volunteer Opportunities
- Street Outreach Workers
- Peer Support Volunteers
- Case Coordinators
- Digital & Admin Team
- Fundraising & Events Crew

## Funding, Sustainability & Partnerships

### Revenue Streams
- Micro-grants
- Community fundraising events
- Direct donations (“Sustain-a-Client”)

### Key Partners
- Transition House & The Warming Room
- County Public Health
- Kids Help Phone
- Fleming College

## Impact & Future Directions

### Current Reach
- Dozens served weekly (supplies, housing supports)

### Success Stories
- Stable housing placements, harm reduction success

### Growth Plans
- Client mobile app with resource mapping
- “Community Voices” podcast
- Advocacy for sanctioned encampment spaces & low-barrier shelters

## Platform Components (Specialized Modules)

### ETHAN (Everything That’s Human And Normal)
- Personal empowerment
- Mental health education
- Digital storytelling & journaling

### DCIDE (Driving Change Inspiring Development Everywhere)
- Comprehensive client case management
- Real-time progress tracking
- Coordination of outreach worker activities

### LINK (Lead Individuals to New Knowledge)
- Smart referral hub
- Automatic service matches

### ASK (Access Support Knowledge)
- Live crisis chat & peer messaging
- 24-hour availability

### BLES (Breaking Life’s Endless Struggles)
- Addiction recovery intakes
- Quick advocacy for residential program placements

## Digital Infrastructure & Security

### Admin Panel & User Management
- Role assignments
- User account management (clients, staff, admins)
- Data export options

### System Security Tools
- Real-time security scanning
- Firewall and RBAC
- Encrypted password storage (bcrypt/Argon2)
- 2FA authentication for sensitive roles

### Database Management Tools
- SQL database health monitoring
- Regular automated backups & integrity checks

## Intake & Assessment Forms
- Basic Intake Form (simple registration)
- Advanced Intake Form (comprehensive client profile)
- Drug Use Self-Assessment Form
- Housing Needs Assessment Form
- Multidomain Assessment (mental health, physical health, legal, family, appointments, income)

## Case Templates & Management
- Emergency shelter placements
- Detox referrals
- ID replacement
- Legal aid
- Disability support
- Employment programs
- Mental health crises
- Family reunification
- Eviction prevention
- Indigenous cultural healing
- Domestic violence shelters
- HIV treatment coordination
- Pregnancy support
- Youth aging out of care
- Re-entry after incarceration

## Reporting & Dashboards
- Outreach worker/admin dashboard with key metrics (active clients, overdue tasks, referral stats)
- Dynamic visualizations (referral counts, demographic breakdowns, client satisfaction)

## Gamified Engagement (PIZZAZZ Module)
- Motivational gamification
- Rewards (points, badges, leaderboards)
- Daily login incentives & wellness tracking

## User Interface & Design Elements
- Neumorphism & Glassmorphism design
- Minimalistic color palette (soft blues, greens, purples)
- Animated, intuitive interactions
- Accessible UI/UX (language, high-contrast, mobile-friendly)

## Registration & Login
- Secure, user-friendly onboarding
- Password strength validation & security questions
- Simple account recovery (email & security question verification)

## Why OUTSINC Matters
- Addresses critical gaps in formal services, especially for overlooked community members in small towns.
- Fosters genuine human connections, promoting lasting change through a responsive, empathetic approach.

## Instructions for Setting Up and Running the Application

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- phpMyAdmin
- Web server (e.g., Apache, Nginx)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/acesonder/OUTSINC.git
   cd OUTSINC
   ```

2. Set up the database:
   - Create a new MySQL database.
   - Import the provided SQL file (`database.sql`) into the database using phpMyAdmin or the MySQL command line.

3. Configure the application:
   - Rename `config.example.php` to `config.php`.
   - Update the database connection settings in `config.php`.

4. Install dependencies (if any):
   ```bash
   composer install
   npm install
   ```

5. Start the web server:
   - For Apache, ensure the `mod_rewrite` module is enabled and the `.htaccess` file is present.
   - For Nginx, configure the server block to point to the `public` directory.

6. Access the application:
   - Open your web browser and navigate to `http://localhost/OUTSINC`.

### Usage

- Register a new account or log in with existing credentials.
- Explore the various features and functionalities of the OUTSINC platform.
- Use the intake forms to add new clients and manage their profiles.
- Utilize the dashboard to track tasks, appointments, and key metrics.
- Engage with the community through the communication hub and gamified features.

### Contributing

We welcome contributions from the community! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them with descriptive messages.
4. Push your changes to your forked repository.
5. Create a pull request to the main repository.

### License

This project is licensed under the MIT License. See the `LICENSE` file for more details.
