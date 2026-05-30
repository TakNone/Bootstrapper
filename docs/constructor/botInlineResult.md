# botInlineResult

**Description** : *Generic result*

**Layer** : 225

```tl
botInlineResult#11965f3a flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?WebDocument content:flags.5?WebDocument send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **title** | [`flags.1?string`](type/string) | Result title |
| **description** | [`flags.2?string`](type/string) | Result description |
| **url** | [`flags.3?string`](type/string) | URL of article or webpage |
| **thumb** | [`flags.4?WebDocument`](type/WebDocument) | Thumbnail for the result |
| **content** | [`flags.5?WebDocument`](type/WebDocument) | Content of the result |
| <mark>send_message</mark> | [`BotInlineMessage`](type/BotInlineMessage) | Message to send |

---

## Type

[BotInlineResult](type/BotInlineResult)

---

## Example

```php
$botInlineResult = $client->botInlineResult(
	id : 'KReQf7Lwdi0Carc4',
	type : 'F7goiVRxm4rSs38N',
	title : 'dQ9om4KXR5khGIfD',
	description : '5QlMbs3pdzxHJnKu',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -623933089900106427,
		size : 83,
		mime_type : 'e7ZC86c3KhvWXztm',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 84,
				h : 60,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'J3ESoKtypwdgRWmi',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 36,
					x : 1038183.7451171875,
					y : -1395131.59375,
					zoom : 274044.9462890625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 815469.1025390625,
				w : 0,
				h : 82,
				preload_prefix_size : 87,
				video_start_ts : 546427.322265625,
				video_codec : 'CoMqFYGk8ZB3cyE2',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 83,
				title : 'vb1V0WL5nwXmK8y6',
				performer : '1CWlDNBMzkAVpGFh',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'P9dh2smicCqfnBte',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'e9ypjYOfoXtU3A2C',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4131268295349211519,
		size : 87,
		mime_type : '4Q5rWEl6F1HSeTbn',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 11,
				h : 10,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '1IF5adjzvHLWbTqo',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 14,
					x : -993233.1220703125,
					y : 51519.6318359375,
					zoom : -761738.306640625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1645874.3740234375,
				w : 14,
				h : 71,
				preload_prefix_size : 10,
				video_start_ts : -351739.7880859375,
				video_codec : 'jREKGto7skeyv8pH',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 13,
				title : 'NzHZFOL40MvgA8xT',
				performer : 't2M3FZ1vOsAnSYUg',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'QB8dwCmOrF9436Yy',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'iIlrJkeQCYbEKfts',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '12qDu5ncmLUPCzlF',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 56,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 30,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 28,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 47,
				language : 'hiTZy1gqWlJEMn6k',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : -3087805377948716147,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 65,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 47,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 20,
				document_id : -7965447543046952551,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 78,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 63,
				date : 9,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 61,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 69,
				old_text : 'EahfOm1wKNZo0A7x',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 60,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```