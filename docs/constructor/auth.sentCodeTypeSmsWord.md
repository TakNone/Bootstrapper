# auth.sentCodeTypeSmsWord

**Description** : *The code was sent via SMS as a secret word, starting with the letter specified in beginning*

**Layer** : 218

```tl
auth.sentCodeTypeSmsWord#a416ac81 flags:# beginning:flags.0?string = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **beginning** | [`flags.0?string`](type/string) | If set, the secret word in the sent SMS (which may contain multiple words) starts with this letter |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeSmsWord(
	beginning : 'tzR3S18JyB9YVagF',
);
```