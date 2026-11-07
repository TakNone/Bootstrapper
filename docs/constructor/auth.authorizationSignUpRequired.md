# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn&#039;t exist on telegram: the user has to enter basic information and sign up*

**Layer** : 233

```tl
auth.authorizationSignUpRequired#44747e9a flags:# terms_of_service:flags.0?help.TermsOfService = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
			data : '6DZjVHv0Ga7wSfE2',
		),
		text : '4eqRjJ7bt2GVfSw0',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 84,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 59,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 79,
				language : 'WCBLr4dPOA1eQ2Gz',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 7,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 8,
				user_id : 1174887632163379202,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 15,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 79,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 92,
				document_id : -5161842131579120300,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 51,
				date : 34,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 73,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 4,
				old_text : 'oXg9HlwBWQsuC7iO',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 8,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 64,
			),
		),
		min_age_confirm : 87,
	),
);
```