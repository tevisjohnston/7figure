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
  Tailwind,
  Link,
} from '@react-email/components';
import * as React from 'react';
import { EmailFooter } from './components/EmailFooter';

interface Day7CaseStudyProps {
  name: string;
}

export const Day7CaseStudy = ({ name }: Day7CaseStudyProps) => {
  return (
    <Html>
      <Head />
      <Preview>Case Study: $5k in 30 Days With One Product</Preview>
      <Tailwind>
        <Body className="bg-[#f6f9fc] font-sans">
          <Container className="bg-white mx-auto pt-5 pb-12 mb-16 max-w-[600px]">
            <Heading className="text-slate-900 text-lg font-bold mt-10 mb-5 px-10">
              The $5k/Month Case Study
            </Heading>

            <Text className="text-slate-700 text-base leading-[26px] my-4 px-10">
              {name}, you've been getting these emails for a week now.
            </Text>

            <Text className="text-slate-700 text-base leading-[26px] my-4 px-10">
              Some people take action. Some don't. I'm hoping you're in the first group,
              because what I'm about to share is <strong>pure gold</strong>.
            </Text>

            <Text className="text-slate-900 text-lg font-bold leading-[30px] my-6 py-6 px-10 bg-green-100 border-l-4 border-green-500">
              How 1 product took me from $0 to $5,958 in 30 days.
            </Text>

            <Text className="text-slate-900 text-base font-bold mt-8 mb-4 px-10">
              <strong>The Product</strong> {' '}
            </Text>
            <Text className="text-slate-700 text-base leading-[26px] my-4 px-10">
              <Link
                className="underline"
                href="https://warriorplus.com/o2/a/rznm9hj/0"
              >
                A high-ticket affiliate marketing course
              </Link>
              with 50% commission and a proven sales funnel.
              Price point: $1,997. 
              Commission per sale: $993.50.
            </Text>

            <Text className="text-slate-900 text-base font-bold mt-8 mb-4 px-10">
              <strong>The Strategy</strong>
            </Text>
            <Section className="px-10">
              <Text className="text-slate-700 text-sm leading-7 my-3">
                <strong>Week 1:</strong> Built a simple landing page with a lead magnet (just like the one you downloaded)
              </Text>
              <Text className="text-slate-700 text-sm leading-7 my-3">
                <strong>Week 2:</strong> Ran $300 in Facebook ads to the landing page. Generated 247 subscribers.
              </Text>
              <Text className="text-slate-700 text-sm leading-7 my-3">
                <strong>Week 3:</strong> Sent my 7-day email sequence (similar to what you're reading now)
              </Text>
              <Text className="text-slate-700 text-sm leading-7 my-3">
                <strong>Week 4:</strong> Made 6 sales = $5,958 in commissions
              </Text>
            </Section>

            <Text className="text-slate-900 text-lg leading-8 my-6 py-5 px-10 bg-slate-100 rounded-lg font-mono">
              Ad spend: $300
              <br />
              Revenue: $5,958
              <br />
              <strong>Profit: $5,658</strong>
            </Text>

            <Text className="text-slate-900 text-base font-bold mt-8 mb-4 px-10">
              <strong>The Key Insight</strong>
            </Text>
            <Text className="text-slate-700 text-base leading-[26px] my-4 px-10">
              I didn't reinvent the wheel. I used {' '}
              <Link
                className="underline"
                href="https://7figure.affiliatemarketconnect.com/wp-content/uploads/2025/12/The-Step-by-Step-Blueprint-to-dollar5kMonth-1.pdf"
              >
                The Step-by-Step Blueprint to $5k/Month
              </Link>
              I didn't do anything different. I just took action and actually implemented it.
            </Text>

            <Text className="text-slate-700 text-base leading-[26px] my-4 px-10">
              Most people get caught up in "learning mode" for months. They read, watch videos,
              take notes... but never launch.
            </Text>

            <Section className="mx-10 my-8 p-6 bg-amber-100 rounded-lg border-2 border-amber-500">
              <Text className="text-slate-900 text-base leading-[26px] m-0">
                <strong>Here's my challenge to you:</strong>
                <br />
                <br />
                Pick ONE product from my recommended list. Set up a simple landing page.
                Drive 100 people to it. Send them a 5-email sequence.
                <br />
                <br />
                That's it. Do this in the next 14 days and you WILL make sales.
              </Text>
            </Section>

            <Section className="py-7 text-center">
              <Button
                className="bg-amber-500 rounded text-white text-base font-bold no-underline text-center inline-block py-3 px-8"
                href="https://7figure.affiliatemarketconnect.com/products"
              >
                View Recommended Products
              </Button>
            </Section>

            <Hr className="border-slate-200 my-5" />

            <Text className="text-slate-700 text-base leading-[26px] my-4 px-10">
              You have everything you need. The blueprint. The product recommendations.
              Now it's just about execution. 🕑 Time to implement.
            </Text>

            <Text className="text-slate-700 text-base leading-[26px] my-4 px-10">
              I'm rooting for you. If you have any questions, just hit reply.
            </Text>

            <EmailFooter
              signature={
                <>
                  Let's make it happen,
                  <br />
                  Tevis Johnston
                  <br />
                  7 Figure Affiliate
                </>
              }
              footerNote="Want more content like this? Check out my blog at 7figure.affiliatemarketconnect.com/blog"
            />
          </Container>
        </Body>
      </Tailwind>
    </Html>
  );
};

export default Day7CaseStudy;
  