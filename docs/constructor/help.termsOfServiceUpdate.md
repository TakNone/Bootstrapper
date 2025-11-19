# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 218

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
	expires : 88,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'AiR8GTFPrL0XIUBq',
		),
		text : 'mYZhIaqvfexHNdA3',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 58,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 25,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 15,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 89,
				language : 'dXwZziv5xTse2gYL',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : 4612052458568581913,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 46,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 25,
				document_id : 2932375413823024016,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 79,
			),
		),
		min_age_confirm : 11,
	),
);
```