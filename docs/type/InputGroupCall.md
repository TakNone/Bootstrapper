# InputGroupCall

**Description** : *Indicates a group call*

**Layer** : 218

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
| [**inputGroupCallSlug**](constructor/inputGroupCallSlug) | Join a conference call through an invitation link » |
| [**inputGroupCallInviteMessage**](constructor/inputGroupCallInviteMessage) | Join a group call through a messageActionConferenceCall invitation message |