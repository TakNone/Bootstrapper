# auth.sentCodeTypeSmsPhrase

**Description** : *The code was sent via SMS as a secret phrase starting with the word specified in beginning*

**Layer** : 218

```tl
auth.sentCodeTypeSmsPhrase#b37794af flags:# beginning:flags.0?string = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **beginning** | [`flags.0?string`](type/string) | If set, the secret phrase (and the SMS) starts with this word |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeSmsPhrase(
	beginning : 'QeoUqMpz1rXIRGyw',
);
```