import {
  Html,
  Head,
  Preview,
  Body,
  Container,
  Section,
  Text,
  Heading,
  Button,
  Hr,
  Link,
} from '@react-email/components';
import * as React from 'react';

interface Day7CaseStudyProps {
  name: string;
}

export const Day7CaseStudy = ({ name }: Day7CaseStudyProps) => {
  return (
    <Html>
      <Head />
      <Preview>Real Case Study: $5k in 30 Days With One Product</Preview>
      <Body style={main}>
        <Container style={container}>
          <Heading style={h1}>The $5k/Month Case Study</Heading>

          <Text style={text}>
            {name}, you've been getting these emails for a week now.
          </Text>

          <Text style={text}>
            Some people take action. Some don't. I'm hoping you're in the first group,
            because what I'm about to share is <strong>pure gold</strong>.
          </Text>

          <Text style={highlight}>
            How I went from $0 to $5,247 in 30 days promoting ONE product.
          </Text>

          <Heading style={h2}>The Product</Heading>
          <Text style={text}>
            A high-ticket affiliate marketing course with 40% commission and a proven
            sales funnel. Price point: $997. Commission per sale: $398.80.
          </Text>

          <Heading style={h2}>The Strategy</Heading>
          <Section style={bulletSection}>
            <Text style={bullet}>
              <strong>Week 1:</strong> Built a simple landing page with a lead magnet (just like the one you downloaded)
            </Text>
            <Text style={bullet}>
              <strong>Week 2:</strong> Ran $300 in Facebook ads to the landing page. Generated 247 subscribers.
            </Text>
            <Text style={bullet}>
              <strong>Week 3:</strong> Sent my 7-day email sequence (similar to what you're reading now)
            </Text>
            <Text style={bullet}>
              <strong>Week 4:</strong> Made 13 sales = $5,184.40 in commissions
            </Text>
          </Section>

          <Text style={calculation}>
            Ad spend: $300<br />
            Revenue: $5,184.40<br />
            <strong>Profit: $4,884.40</strong>
          </Text>

          <Heading style={h2}>The Key Insight</Heading>
          <Text style={text}>
            I didn't reinvent the wheel. I used the <strong>exact blueprint</strong> I gave you.
            The only difference? I actually implemented it.
          </Text>

          <Text style={text}>
            Most people get caught up in "learning mode" for months. They read, watch videos,
            take notes... but never launch.
          </Text>

          <Section style={calloutBox}>
            <Text style={calloutText}>
              <strong>Here's my challenge to you:</strong><br /><br />
              Pick ONE product from my recommended list. Set up a simple landing page.
              Drive 100 people to it. Send them a 5-email sequence.<br /><br />
              That's it. Do this in the next 14 days and you WILL make sales.
            </Text>
          </Section>

          <Section style={buttonContainer}>
            <Button style={button} href="https://7figure.affiliatemarketconnect.com/products">
              View Recommended Products
            </Button>
          </Section>

          <Hr style={hr} />

          <Text style={text}>
            You have everything you need. The blueprint. The product recommendations.
            The email templates. Now it's just about execution.
          </Text>

          <Text style={text}>
            I'm rooting for you. If you have questions, just hit reply.
          </Text>

          <Text style={footer}>
            Let's make it happen,<br />
            Tevis Johnston<br />
            7 Figure Affiliate
          </Text>

          <Hr style={hr} />

          <Text style={footerGray}>
            This is the final email in your 7-day sequence. Want more content like this?
            Check out my blog at 7figure.affiliatemarketconnect.com
          </Text>

          <Section style={unsubscribeSection}>
            <Link href="https://7figure.affiliatemarketconnect.com/unsubscribe" style={unsubscribeLink}>
              Unsubscribe
            </Link>
          </Section>

          <Text style={addressText}>
            21420 Plane Tree Ln, Newhall, CA 91321
          </Text>
        </Container>
      </Body>
    </Html>
  );
};

// Styles
const main = {
  backgroundColor: '#f6f9fc',
  fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif',
};

const container = {
  backgroundColor: '#ffffff',
  margin: '0 auto',
  padding: '20px 0 48px',
  marginBottom: '64px',
  maxWidth: '600px',
};

const h1 = {
  color: '#0f172a',
  fontSize: '32px',
  fontWeight: 'bold',
  margin: '40px 0 20px',
  padding: '0 40px',
};

const h2 = {
  color: '#0f172a',
  fontSize: '22px',
  fontWeight: 'bold',
  margin: '32px 0 16px',
  padding: '0 40px',
};

const text = {
  color: '#334155',
  fontSize: '16px',
  lineHeight: '26px',
  margin: '16px 0',
  padding: '0 40px',
};

const highlight = {
  color: '#0f172a',
  fontSize: '20px',
  fontWeight: 'bold',
  lineHeight: '30px',
  margin: '24px 0',
  padding: '24px 40px',
  backgroundColor: '#dcfce7',
  borderLeft: '4px solid #22c55e',
};

const bulletSection = {
  padding: '0 40px',
};

const bullet = {
  color: '#334155',
  fontSize: '16px',
  lineHeight: '28px',
  margin: '12px 0',
};

const calculation = {
  color: '#0f172a',
  fontSize: '18px',
  lineHeight: '32px',
  margin: '24px 0',
  padding: '20px 40px',
  backgroundColor: '#f1f5f9',
  borderRadius: '8px',
  fontFamily: 'monospace',
};

const calloutBox = {
  margin: '32px 40px',
  padding: '24px',
  backgroundColor: '#fef3c7',
  borderRadius: '8px',
  border: '2px solid #f59e0b',
};

const calloutText = {
  color: '#0f172a',
  fontSize: '16px',
  lineHeight: '26px',
  margin: '0',
};

const buttonContainer = {
  padding: '27px 0 27px',
  textAlign: 'center' as const,
};

const button = {
  backgroundColor: '#f59e0b',
  borderRadius: '5px',
  color: '#fff',
  fontSize: '16px',
  fontWeight: 'bold',
  textDecoration: 'none',
  textAlign: 'center' as const,
  display: 'inline-block',
  padding: '12px 32px',
};

const hr = {
  borderColor: '#e2e8f0',
  margin: '20px 0',
};

const footer = {
  color: '#334155',
  fontSize: '16px',
  lineHeight: '26px',
  margin: '16px 0',
  padding: '0 40px',
};

const footerGray = {
  color: '#64748b',
  fontSize: '12px',
  lineHeight: '20px',
  margin: '16px 0',
  padding: '0 40px',
};

const unsubscribeSection = {
  textAlign: 'center' as const,
  margin: '20px 0 10px',
};

const unsubscribeLink = {
  color: '#64748b',
  fontSize: '12px',
  textDecoration: 'underline',
};

const addressText = {
  color: '#94a3b8',
  fontSize: '11px',
  lineHeight: '18px',
  textAlign: 'center' as const,
  margin: '10px 0 20px',
};

export default Day7CaseStudy;
