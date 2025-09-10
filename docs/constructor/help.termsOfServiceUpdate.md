# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 214

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
	expires : 60,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'RWb8ogQism69ZOpC',
		),
		text : '7fJrCKDZXaGI3As8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 87,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 24,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 12,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 37,
				language : 'iFjK2rsEfReCOSqI',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -6693217326917811062,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 74,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 59,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 0,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 24,
				document_id : 7749342535238811189,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
		),
		min_age_confirm : 58,
	),
);
```