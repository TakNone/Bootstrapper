# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram&#039;s terms of service\. If the terms of service are declined, then the account\.deleteAccount method should be called with the reason &quot;Decline ToS update&quot;*

**Layer** : 216

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
	expires : 77,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : '9OctALRuQaHI8SXf',
		),
		text : 'L2VWcCUm5vJ9M74p',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 10,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 45,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 68,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 51,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 54,
				language : '8UiBqwDmF5tTOpoV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 28,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : -6612918127301527484,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 66,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 34,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 39,
				document_id : 1340843926088255246,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 35,
			),
		),
		min_age_confirm : 11,
	),
);
```