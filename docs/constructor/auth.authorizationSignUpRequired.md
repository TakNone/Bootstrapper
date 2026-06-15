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
			data : 'RU8ZblK3JHrC7cAv',
		),
		text : 'dX5qbnjZUM9m1aSB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 87,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 38,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 56,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 66,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 37,
				language : 'qSLsFfUyVgZ9zJGp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 46,
				user_id : -8581474252968963161,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 56,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 40,
				document_id : 7019373705356460566,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 86,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 81,
				date : 90,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 76,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 73,
				old_text : '8sK9aVUqp3gI1rOR',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 79,
			),
		),
		min_age_confirm : 5,
	),
);
```