# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 211

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
	expires : 63,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'aA6nZeHD1s4XEKhY',
		),
		text : 'SFA74NpIyD3vP9QK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 99,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 42,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 60,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 83,
				length : 71,
			),
			$client->messageEntityUrl(
				offset : 23,
				length : 93,
			),
			$client->messageEntityEmail(
				offset : 30,
				length : 61,
			),
			$client->messageEntityBold(
				offset : 60,
				length : 80,
			),
			$client->messageEntityItalic(
				offset : 92,
				length : 95,
			),
			$client->messageEntityCode(
				offset : 41,
				length : 27,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'rltAwQxsRoIfgknD',
			),
			$client->messageEntityTextUrl(
				offset : 58,
				length : 32,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 71,
				length : 13,
				user_id : 5383993768497473839,
			),
			$client->inputMessageEntityMentionName(
				offset : 50,
				length : 43,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 5,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 49,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 93,
				length : 35,
			),
			$client->messageEntityStrike(
				offset : 78,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 17,
				length : 56,
			),
			$client->messageEntitySpoiler(
				offset : 37,
				length : 34,
			),
			$client->messageEntityCustomEmoji(
				offset : 62,
				length : 67,
				document_id : -370466900214130017,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 41,
				length : 14,
			),
		),
		min_age_confirm : 72,
	),
);
```