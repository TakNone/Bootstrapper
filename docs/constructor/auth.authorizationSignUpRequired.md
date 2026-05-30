# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn&#039;t exist on telegram: the user has to enter basic information and sign up*

**Layer** : 225

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
			data : '635bwJjOCv0mgYRI',
		),
		text : 'dgOJhRfHZYj1qvkz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 93,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 60,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 41,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 49,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 91,
				language : 'NgGuEDhe1Ml2VSOB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : -9220742912881287543,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 40,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 8,
				document_id : -6179922569140893586,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 97,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 33,
				date : 25,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 98,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 40,
				old_text : 'Ei3thxYosv1f7gZ0',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 99,
			),
		),
		min_age_confirm : 25,
	),
);
```