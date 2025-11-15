# smsjobs.eligibleToJoin

**Description** : *SMS jobs eligibility*

**Layer** : 218

```tl
smsjobs.eligibleToJoin#dc8b44cf terms_url:string monthly_sent_sms:int = smsjobs.EligibilityToJoin;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>terms_url</mark> | [`string`](type/string) | Terms of service URL |
| <mark>monthly_sent_sms</mark> | [`int`](type/int) | Monthly sent SMSes |

---

## Type

[smsjobs.EligibilityToJoin](type/smsjobs.EligibilityToJoin)

---

## Example

```php
$smsjobsEligibilityToJoin = $client->smsjobs->eligibleToJoin(
	terms_url : 'https://docs.liveproto.dev',
	monthly_sent_sms : 17,
);
```