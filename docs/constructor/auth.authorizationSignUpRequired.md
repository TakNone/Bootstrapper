# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn&#039;t exist on telegram: the user has to enter basic information and sign up*

**Layer** : 214

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
			data : 'aser2QPhZ794DYGB',
		),
		text : 'LKJFTjACWYeMbIif',
		entities : array(
			$client->messageEntityUnknown(
				offset : 71,
				length : 15,
			),
			$client->messageEntityMention(
				offset : 56,
				length : 33,
			),
			$client->messageEntityHashtag(
				offset : 61,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 49,
				length : 93,
			),
			$client->messageEntityUrl(
				offset : 98,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 13,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 2,
				length : 50,
			),
			$client->messageEntityItalic(
				offset : 28,
				length : 91,
			),
			$client->messageEntityCode(
				offset : 43,
				length : 29,
			),
			$client->messageEntityPre(
				offset : 63,
				length : 15,
				language : 'J3UWZurHp7QwjLbR',
			),
			$client->messageEntityTextUrl(
				offset : 12,
				length : 51,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 51,
				length : 75,
				user_id : -5999263084728593970,
			),
			$client->inputMessageEntityMentionName(
				offset : 16,
				length : 47,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 99,
				length : 93,
			),
			$client->messageEntityCashtag(
				offset : 100,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 61,
				length : 15,
			),
			$client->messageEntityStrike(
				offset : 82,
				length : 46,
			),
			$client->messageEntityBankCard(
				offset : 78,
				length : 92,
			),
			$client->messageEntitySpoiler(
				offset : 46,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 65,
				length : 6,
				document_id : 7608663102059198085,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 47,
				length : 37,
			),
		),
		min_age_confirm : 57,
	),
);
```