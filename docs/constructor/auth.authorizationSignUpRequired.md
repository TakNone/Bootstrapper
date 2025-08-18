# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn&#039;t exist on telegram: the user has to enter basic information and sign up*

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
			data : 'EcQXoAJKTkZNWVvB',
		),
		text : 'yBD7C2cFnzejN0K8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 68,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 60,
				length : 48,
			),
			$client->messageEntityHashtag(
				offset : 69,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 84,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 86,
				length : 98,
			),
			$client->messageEntityEmail(
				offset : 39,
				length : 79,
			),
			$client->messageEntityBold(
				offset : 15,
				length : 58,
			),
			$client->messageEntityItalic(
				offset : 64,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 1,
				length : 80,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : '1qXlQyvo3bfztKhu',
			),
			$client->messageEntityTextUrl(
				offset : 42,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 16,
				length : 33,
				user_id : 3207653355258638692,
			),
			$client->inputMessageEntityMentionName(
				offset : 80,
				length : 13,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 44,
				length : 50,
			),
			$client->messageEntityCashtag(
				offset : 39,
				length : 22,
			),
			$client->messageEntityUnderline(
				offset : 75,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 34,
				length : 91,
			),
			$client->messageEntityBankCard(
				offset : 58,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 77,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 22,
				length : 94,
				document_id : -2671236768917330366,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 91,
				length : 8,
			),
		),
		min_age_confirm : 37,
	),
);
```