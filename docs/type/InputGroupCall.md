# InputGroupCall

**Description** : *Indicates a group call*

**Layer** : 229

```tl
inputGroupCall#d8aa840f id:long access_hash:long = InputGroupCall;
inputGroupCallSlug#fe06823f slug:string = InputGroupCall;
inputGroupCallInviteMessage#8c10603f msg_id:int = InputGroupCall;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputGroupCall**](constructor/inputGroupCall) | Points to a specific group call |
| [**inputGroupCallSlug**](constructor/inputGroupCallSlug) | Identify a conference call » using the slug from its invitation link.This constructor can only be used for conference calls. It cannot be used for video chats/livestreams, live stories or any other group call type |
| [**inputGroupCallInviteMessage**](constructor/inputGroupCallInviteMessage) | Identifies a conference call » using its messageActionConferenceCall invitation service message |