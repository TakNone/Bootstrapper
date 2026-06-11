# auth.authorizationSignUpRequired

**Description** : *An account with this phone number doesn&#039;t exist on telegram: the user has to enter basic information and sign up*

**Layer** : 227

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
			data : 'XpEDcb6tnPGH5CLZ',
		),
		text : 'SkZcV6IRTgX3dKwB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 9,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 43,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 59,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 29,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 89,
				language : 'mvWlkjdu5JNTny3F',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : 5122808590641359427,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 82,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 99,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 78,
				document_id : 3591276984159118958,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 87,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 48,
				date : 53,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 76,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 29,
				old_text : 'E5IiNxpRUvjaloHK',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 93,
			),
		),
		min_age_confirm : 84,
	),
);
```