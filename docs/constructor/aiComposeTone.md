# aiComposeTone

**Description** : *A custom AI composer tone &raquo;, used to rephrase messages in a specific style with the AI message composer*

**Layer** : 229

```tl
aiComposeTone#cff63ea9 flags:# creator:flags.0?true id:long access_hash:long slug:string title:string emoji_id:flags.1?long prompt:flags.4?string installs_count:flags.2?int author_id:flags.3?long example_english:flags.5?AiComposeToneExample = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **creator** | [`flags.0?true`](type/true) | Whether the current user is the creator of this tone |
| <mark>id</mark> | [`long`](type/long) | Tone identifier |
| <mark>access_hash</mark> | [`long`](type/long) | Tone access hash |
| <mark>slug</mark> | [`string`](type/string) | Unique tone slug, used to share and install the tone via AI compose tone links » |
| <mark>title</mark> | [`string`](type/string) | Human-readable tone name, up to aicompose_tone_title_length_max » UTF-8 characters long |
| **emoji_id** | [`flags.1?long`](type/long) | Custom emoji ID of the tone's icon |
| **prompt** | [`flags.4?string`](type/string) | The prompt that describes how the AI should rephrase messages using this tone, up to aicompose_tone_prompt_length_max » UTF-8 characters long; only present for tones created by the current user |
| **installs_count** | [`flags.2?int`](type/int) | Number of users that have installed this tone |
| **author_id** | [`flags.3?long`](type/long) | ID of the user that created this tone, if made public by the author |
| **example_english** | [`flags.5?AiComposeToneExample`](type/AiComposeToneExample) | An example showing how a sample English message is rephrased by this tone; use aicompose.getToneExample to fetch more examples |

---

## Type

[AiComposeTone](type/AiComposeTone)

---

## Example

```php
$aiComposeTone = $client->aiComposeTone(
	creator : true,
	id : 9221212256375720237,
	access_hash : -6812596926071587479,
	slug : 'Au143MwzyHpjrY8D',
	title : 'aRBw3vVe2EFoiqSu',
	emoji_id : 6645528467182029624,
	prompt : 'loJ2vGfQ3dDP0kK5',
	installs_count : 82,
	author_id : 7696436038050240496,
	example_english : $client->aiComposeToneExample(
		from : $client->textWithEntities(
			text : 'g6qpwFsfhdyU39vX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 21,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 58,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 79,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 86,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 55,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 88,
					language : 'K8yNlPteRsIruOxX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 82,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : -4486013025608643458,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 66,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 95,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 33,
					document_id : 3774631152312379747,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 58,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 74,
					date : 72,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 24,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 55,
					old_text : 'd1BxuaDwQjgfeFsp',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 24,
				),
			),
		),
		to : $client->textWithEntities(
			text : 'ekBVzg2Qx57vAh16',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 65,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 26,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 56,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 85,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 56,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 16,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 48,
					language : 'M7K8yEsaZ4AjIQgB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 29,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : 1350871592953877065,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 70,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 41,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 26,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 85,
					document_id : 4149683735085516615,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 74,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 68,
					date : 35,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 42,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 49,
					old_text : 'BFoMsvDbtie9EcUh',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 22,
				),
			),
		),
	),
);
```