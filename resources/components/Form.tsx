import React, {useState} from 'react';

export default function Form() {
    const [isSent, setIsSent] = useState(false);
    const [message, setMessage] = useState("Hello World!");

    if (isSent) {
        return (
            <>
                <h1>Message Sent</h1>
            </>
        );
    }

    return (
        <>
            <form onSubmit={e => {
                e.preventDefault();
                setIsSent(true);
                sendMessage(message);
            }}>
                <div>
                    <textarea placeholder={"Message"} value={message} onChange={e => {
                        setMessage(e.target.value);
                    }} />
                </div>
                <div>
                    <button type={"submit"}>Send</button>
                </div>
            </form>
        </>
    );
}

function sendMessage(message: string) {
    // Send message to server
}
