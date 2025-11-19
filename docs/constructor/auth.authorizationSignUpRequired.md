# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn&#039;t exist on telegram: the user has to enter basic information and sign up*

**Layer** : 218

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
			data : 'og1zspwG8MrPdvyY',
		),
		text : 'EajGtUb3q1dnkl2e',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 86,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 64,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 63,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'DMdE96ucwWOl1X4J',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 57,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : 7771978727477514944,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 8,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 2,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : -4644076934872164721,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 85,
			),
		),
		min_age_confirm : 95,
	),
);
```