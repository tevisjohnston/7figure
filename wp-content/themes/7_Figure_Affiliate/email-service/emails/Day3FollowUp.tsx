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

interface Day3FollowUpProps {
  name: string;
}

export const Day3FollowUp = ({ name }: Day3FollowUpProps) => {
  return (
    <Html>
      <Head />
      <Preview>How to Find Winning Products That Actually Convert</Preview>
      <Body style={main}>
        <Container style={container}>
          <Heading style={h1}>Hey {name}, Let's Talk Products...</Heading>

          <Text style={text}>
            You've had a few days to review the blueprint. Now I want to share something critical:
          </Text>

          <Text style={highlight}>
            <strong>95% of affiliate marketers fail because they promote the WRONG products.</strong>
          </Text>

          <Text style={text}>
            It doesn't matter how good your marketing is if the product doesn't convert.
            Here's my exact 3-question filter for finding winners:
          </Text>

          <Section style={bulletSection}>
            <Text style={bullet}>
              <strong>1. Does it solve a PAINFUL problem?</strong><br />
              If people aren't actively searching for a solution, you're pushing a boulder uphill.
            </Text>
            <Text style={bullet}>
              <strong>2. Is the sales page proven?</strong><br />
              Check the JV page for conversion rates. I only promote products converting at 3%+ minimum.
            </Text>
            <Text style={bullet}>
              <strong>3. Does it have a recurring commission?</strong><br />
              One-time commissions are fine, but recurring income changes the game.
            </Text>
          </Section>

          <Text style={text}>
            Right now, I'm promoting <strong>3 products</strong> that hit all three criteria.
            Combined, they generate $5k-$8k/month on autopilot.
          </Text>

          <Section style={buttonContainer}>
            <Button style={button} href="https://7figure.affiliatemarketconnect.com/products">
              See My Top 3 Products
            </Button>
          </Section>

          <Hr style={hr} />

          <Text style={text}>
            <strong>Pro tip:</strong> Start with ONE product. Master the promotion process.
            Then add more to your arsenal.
          </Text>

          <Text style={text}>
            In 4 days, I'll send you a real case study showing exactly how I took one of these
            products from $0 to $5k in 30 days.
          </Text>

          <Text style={footer}>
            Talk soon,<br />
            Tevis Johnston<br />
            7 Figure Affiliate
          </Text>

          <Hr style={hr} />

          <Text style={footerGray}>
            You're receiving this as part of your 7-day email sequence from 7figure.affiliatemarketconnect.com
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
  fontSize: '28px',
  fontWeight: 'bold',
  margin: '40px 0',
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
  fontSize: '18px',
  lineHeight: '28px',
  margin: '24px 0',
  padding: '20px 40px',
  backgroundColor: '#fef3c7',
  borderLeft: '4px solid #f59e0b',
};

const bulletSection = {
  padding: '0 40px',
};

const bullet = {
  color: '#334155',
  fontSize: '16px',
  lineHeight: '28px',
  margin: '16px 0',
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

export default Day3FollowUp;
