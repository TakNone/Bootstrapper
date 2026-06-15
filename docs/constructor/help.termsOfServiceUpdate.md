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
	expires : 20,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'zxDV80rwBtX5dCgS',
		),
		text : 'h3Z9oQgfEXVpYaTP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 41,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 77,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 57,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 47,
				language : 'L8NXTm2ugjYIdyUv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 47,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : 2920116827306126782,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 79,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : 2972445806338381547,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 89,
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
				date : 0,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 32,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 6,
				old_text : 'lCwa1IAsOZyzENbY',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 10,
			),
		),
		min_age_confirm : 50,
	),
);
```