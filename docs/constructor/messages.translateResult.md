# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 218

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
			text : 'aVpDq5rUTFxLBmzN',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 31,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 70,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 10,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 0,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 85,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 67,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 72,
					language : 'NJM2yZ7FTvamhb5q',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 18,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : 8094405049474590450,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 90,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 80,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 92,
					document_id : -4912822384577499998,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 63,
				),
			),
		),
	),
);
```