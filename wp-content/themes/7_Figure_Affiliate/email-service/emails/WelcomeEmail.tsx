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
  
  interface WelcomeEmailProps {
    name: string;
  }
  
  export const WelcomeEmail = ({ name }: WelcomeEmailProps) => {
    return (
      <Html>
        <Head />
        <Preview>Your Step-by-Step Blueprint to $5k/Month is Ready!</Preview>
        <Body style={main}>
          <Container style={container}>
            <Heading style={h1}>Welcome, {name}! 🎉</Heading>
  
            <Text style={text}>
              Here's your download <Link href="https://7figure.affiliatemarketconnect.com/wp-content/uploads/2025/12/The-Step-by-Step-Blueprint-to-5k-Month.pdf">Step-by-Step Blueprint to $5k/Month</Link>
            </Text>
  
            <Text style={text}>
              This blueprint contains the exact system I use to generate consistent income with affiliate marketing.
              You're about to discover:
            </Text>
  
            <Section style={bulletSection}>
              <Text style={bullet}>✓ The 3-step framework to identify winning products</Text>
              <Text style={bullet}>✓ How to build trust with your audience (without being pushy)</Text>
              <Text style={bullet}>✓ The traffic sources that convert at 10%+ for affiliates</Text>
              <Text style={bullet}>✓ My secret "email sequence" that turns subscribers into buyers</Text>
            </Section>
  
            <Section style={buttonContainer}>
              <Button style={button} href="https://7figure.affiliatemarketconnect.com/products">
                View My Recommended Products
              </Button>
            </Section>
  
            <Hr style={hr} />
  
            <Text style={text}>
              Over the next 7 days, I'll be sending you additional strategies and case studies to help you
              implement this system as quickly as possible.
            </Text>
  
            <Text style={text}>
              <strong>Tomorrow:</strong> I'll share how I choose which products to promote (this alone will save you months of trial and error).
            </Text>
  
            <Text style={footer}>
              To your success,<br />
              Tevis Johnston<br />
              7 Figure Affiliate
            </Text>
  
            <Hr style={hr} />
  
            <Text style={footerGray}>
              You're receiving this because you signed up for the Step-by-Step Blueprint at 7figure.affiliatemarketconnect.com
            </Text>
  
            <Section style={unsubscribeSection}>
              <Link href="https://7figure.affiliatemarketconnect.com/unsubscribe" style={unsubscribeLink}>
                Unsubscribe
              </Link>
            </Section>
  
            <Text style={addressText}>
              21420 Plane Tree Ln Newhall CA 91321
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
  
  const bulletSection = {
    padding: '0 40px',
  };
  
  const bullet = {
    color: '#334155',
    fontSize: '16px',
    lineHeight: '28px',
    margin: '8px 0',
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
  
  export default WelcomeEmail;
  