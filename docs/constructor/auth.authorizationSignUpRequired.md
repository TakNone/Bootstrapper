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
			data : 'T6aCSuXLtlZnckds',
		),
		text : '3Ng0xBzORA8LIG24',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 19,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 43,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 21,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 72,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : 'oL24gvZxlCEziyIH',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 29,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : -5665366708578515445,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 72,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 77,
				document_id : -4111658682058152193,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 81,
			),
		),
		min_age_confirm : 44,
	),
);
```