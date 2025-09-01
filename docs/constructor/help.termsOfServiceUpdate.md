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
	expires : 94,
	terms_of_service : $client->help->termsOfService(
		popup : true,
		id : $client->dataJSON(
			data : 'F2kZ3s8yPwWADCzJ',
		),
		text : 'ZVm5qvsBa0b6Hp7C',
		entities : array(
			$client->messageEntityUnknown(
				offset : 59,
				length : 1,
			),
			$client->messageEntityMention(
				offset : 96,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 41,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 87,
				length : 4,
			),
			$client->messageEntityUrl(
				offset : 25,
				length : 70,
			),
			$client->messageEntityEmail(
				offset : 99,
				length : 5,
			),
			$client->messageEntityBold(
				offset : 51,
				length : 69,
			),
			$client->messageEntityItalic(
				offset : 12,
				length : 100,
			),
			$client->messageEntityCode(
				offset : 33,
				length : 73,
			),
			$client->messageEntityPre(
				offset : 6,
				length : 75,
				language : 'fq5Q6ye7WpdCOvY9',
			),
			$client->messageEntityTextUrl(
				offset : 33,
				length : 8,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 29,
				length : 7,
				user_id : -4072707252941947183,
			),
			$client->inputMessageEntityMentionName(
				offset : 64,
				length : 94,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 53,
				length : 56,
			),
			$client->messageEntityUnderline(
				offset : 92,
				length : 13,
			),
			$client->messageEntityStrike(
				offset : 75,
				length : 68,
			),
			$client->messageEntityBankCard(
				offset : 29,
				length : 88,
			),
			$client->messageEntitySpoiler(
				offset : 76,
				length : 56,
			),
			$client->messageEntityCustomEmoji(
				offset : 37,
				length : 52,
				document_id : -790495254374177146,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 70,
				length : 82,
			),
		),
		min_age_confirm : 30,
	),
);
```