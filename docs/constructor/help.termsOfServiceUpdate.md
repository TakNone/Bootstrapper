# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 222

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
	expires : 83,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'Y3ph5JBxgQ8WHosc',
		),
		text : 'T6YcPtKlnFvWjQpL',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 62,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 48,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 37,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 14,
				language : 'K4EQ2opwWtOgvbJn',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 15,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : -3229347906693540193,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 51,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 3,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 14,
				document_id : 639913059004099292,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
		),
		min_age_confirm : 88,
	),
);
```