# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn&#039;t exist on telegram: the user has to enter basic information and sign up*

**Layer** : 216

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
			data : 'IGro5QhYJOjZ2xKN',
		),
		text : '97xyLhaoNJ2fBOeA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 8,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 16,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 31,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 73,
				language : 'otWw6pHMQfV1PcJK',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 83,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : -8567558794720647238,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 65,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 89,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 27,
				document_id : -8861275398232433283,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
		),
		min_age_confirm : 21,
	),
);
```