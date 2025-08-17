# help.termsOfServiceUpdate

**Description** : *Info about an update of telegram's terms of service. If the terms of service are declined, then the account.deleteAccount method should be called with the reason "Decline ToS update"*

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
	expires : 12,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'rHwy0q4fQEv1G9pZ',
		),
		text : 'uVf1v42JeG6dyXma',
		entities : array(
			$client->messageEntityUnknown(
				offset : 42,
				length : 52,
			),
			$client->messageEntityMention(
				offset : 37,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 90,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 90,
				length : 92,
			),
			$client->messageEntityUrl(
				offset : 43,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 44,
				length : 88,
			),
			$client->messageEntityBold(
				offset : 83,
				length : 28,
			),
			$client->messageEntityItalic(
				offset : 65,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 82,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 95,
				length : 70,
				language : '5wNQ4KW6s1RGDzvu',
			),
			$client->messageEntityTextUrl(
				offset : 13,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 67,
				length : 40,
				user_id : -3814143477984716223,
			),
			$client->inputMessageEntityMentionName(
				offset : 43,
				length : 73,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 10,
				length : 10,
			),
			$client->messageEntityCashtag(
				offset : 75,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 1,
				length : 62,
			),
			$client->messageEntityStrike(
				offset : 60,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 25,
				length : 66,
			),
			$client->messageEntitySpoiler(
				offset : 97,
				length : 81,
			),
			$client->messageEntityCustomEmoji(
				offset : 10,
				length : 2,
				document_id : -3703268765690083641,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 82,
				length : 96,
			),
		),
		min_age_confirm : 78,
	),
);
```