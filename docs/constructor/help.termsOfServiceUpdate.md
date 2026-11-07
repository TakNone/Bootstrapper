# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 233

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
	expires : 29,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'HSUfuP5FDdeiMq9b',
		),
		text : 'SXrLZWjlKD9IsPnh',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 94,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 18,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 57,
				language : '0Cs1NESqwadzIiMG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : 5481033928733613638,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 29,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 24,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 63,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 85,
				document_id : 2057937439088159658,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 14,
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
				date : 52,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 83,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 49,
				old_text : 'XwdZHRFI1fiTolCs',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 83,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 10,
			),
		),
		min_age_confirm : 9,
	),
);
```