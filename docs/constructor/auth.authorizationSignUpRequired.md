# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn't exist on telegram: the user has to enter basic information and sign up*

**Layer** : 211

```tl
auth.authorizationSignUpRequired#44747e9a flags:# terms_of_service:flags.0?help.TermsOfService = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **terms_of_service** | [`flags.0?help.TermsOfService`](type/help.TermsOfService) | Telegram's terms of service: the user must read and accept the terms of service before signing up to telegram |

---

## Type

[auth.Authorization](type/auth.Authorization)

---

## Example

```php
$authAuthorization = $client->auth->authorizationSignUpRequired(
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'hXbikQvqtPHe86Zc',
		),
		text : 'SwBAyv5NQhXlq7I9',
		entities : array(
			$client->messageEntityUnknown(
				offset : 45,
				length : 98,
			),
			$client->messageEntityMention(
				offset : 47,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 30,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 34,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 4,
				length : 30,
			),
			$client->messageEntityEmail(
				offset : 94,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 48,
				length : 49,
			),
			$client->messageEntityItalic(
				offset : 72,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 66,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 39,
				length : 31,
				language : 'kZImR1LprBJs3tf6',
			),
			$client->messageEntityTextUrl(
				offset : 9,
				length : 68,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 76,
				length : 8,
				user_id : 6478339558645158946,
			),
			$client->inputMessageEntityMentionName(
				offset : 73,
				length : 72,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 22,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 47,
				length : 35,
			),
			$client->messageEntityUnderline(
				offset : 42,
				length : 27,
			),
			$client->messageEntityStrike(
				offset : 55,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 90,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 57,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 100,
				length : 57,
				document_id : -7614786212242890707,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 26,
				length : 50,
			),
		),
		min_age_confirm : 97,
	),
);
```