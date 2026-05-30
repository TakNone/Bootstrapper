# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 225

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
	expires : 7,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'ng2ajEX3GBMCe9zR',
		),
		text : 'a7DZhBHRw8Frdcjv',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 83,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 25,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 91,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 48,
				language : 'YbmQFlSDBgtONq8r',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 99,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : 8512973168316482671,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 20,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 47,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 46,
				document_id : 6051588916050993235,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 93,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 12,
				date : 90,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 15,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 57,
				old_text : 'IAZyYjltmq5aucoN',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 74,
			),
		),
		min_age_confirm : 77,
	),
);
```