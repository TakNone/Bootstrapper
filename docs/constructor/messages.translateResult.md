# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 233

```tl
messages.translateResult#33db32f8 result:Vector<TextWithEntities> = messages.TranslatedText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`Vector<TextWithEntities>`](type/TextWithEntities) | Text+entities, for each input message |

---

## Type

[messages.TranslatedText](type/messages.TranslatedText)

---

## Example

```php
$messagesTranslatedText = $client->messages->translateResult(
	result : array(
		$client->textWithEntities(
			text : 'P0ytTeLncUMspS4i',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 17,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 49,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 38,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 44,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 3,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 65,
					language : 'LtKQzPUCpbAEFZkX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 30,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : 6393324096292586851,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 62,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 45,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 48,
					document_id : -6672111654897732738,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 72,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 46,
					date : 38,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 79,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 6,
					old_text : 'ykF293rEX48icBao',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 10,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 52,
				),
			),
		),
	),
);
```