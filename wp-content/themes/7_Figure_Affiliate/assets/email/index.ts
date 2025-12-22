import 'dotenv/config';
import { Resend } from 'resend';

const resend = new Resend(process.env.RESEND_API_KEY);

(async function() {
  try {
    await resend.batch.send([
      {
        from: '7 Figure Affiliate <tevis.johnston@affiliatemarketconnect.com>',
        to: ['tevisjohnston@gmail.com'],
        subject: 'hello world',
        html: '<h1>it works!</h1>',
      },
      {
        from: '7 Figure Affiliate <tevis.johnston@affiliatemarketconnect.com>',
        to: ['initiate432@gmail.com'],
        subject: 'world hello',
        html: '<p>it works!</p>',
      },
    ]);

    console.log;
  } catch (error) {
    console.error(error);
  }
});