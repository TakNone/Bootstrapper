# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 227

```tl
help.termsOfServiceUpdate#28ecf961 expires:int terms_of_service:help.TermsOfService = help.TermsOfServiceUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>expires</mark> | [`int`](type/int) | New TOS updates will have to be queried using help.getTermsOfServiceUpdate in expires seconds |
| <mark>terms_of_service</mark> | [`help.TermsOfService`](type/help.TermsOfService) | New terms of service |

---

## Type

[help.TermsOfServiceUpdate](type/help.TermsOfServiceUpdate)

---

## Example

```php
$helpTermsOfServiceUpdate = $client->help->termsOfServiceUpdate(
	expires : 44,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'PZ0IyQrgJnTNvMuG',
		),
		text : 'pf5nsAcOJr3Slbwm',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 2,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 10,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 8,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 68,
				language : 'oNenwX0sRYIyCha3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : -763558257956927144,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 62,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 82,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : 6682513702326380333,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 80,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 10,
				date : 2,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 32,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 41,
				old_text : 'zH9mf3v5ylGL0apI',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 53,
			),
		),
		min_age_confirm : 6,
	),
);
```