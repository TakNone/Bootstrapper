# storyItem

**Description** : *Represents a story*

**Layer** : 218

```tl
storyItem#edf164f1 flags:# pinned:flags.5?true public:flags.7?true close_friends:flags.8?true min:flags.9?true noforwards:flags.10?true edited:flags.11?true contacts:flags.12?true selected_contacts:flags.13?true out:flags.16?true id:int date:int from_id:flags.18?Peer fwd_from:flags.17?StoryFwdHeader expire_date:int caption:flags.0?string entities:flags.1?Vector<MessageEntity> media:MessageMedia media_areas:flags.14?Vector<MediaArea> privacy:flags.2?Vector<PrivacyRule> views:flags.3?StoryViews sent_reaction:flags.15?Reaction albums:flags.19?Vector<int> = StoryItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.5?true`](type/true) | Whether this story is pinned on the user's profile |
| **public** | [`flags.7?true`](type/true) | Whether this story is public and can be viewed by everyone |
| **close_friends** | [`flags.8?true`](type/true) | Whether this story can only be viewed by our close friends, see here » for more info |
| **min** | [`flags.9?true`](type/true) | Full information about this story was omitted for space and performance reasons; use stories.getStoriesByID to fetch full info about this story when and if needed |
| **noforwards** | [`flags.10?true`](type/true) | Whether this story is protected and thus cannot be forwarded; clients should also prevent users from saving attached media (i.e. videos should only be streamed, photos should be kept in RAM, et cetera) |
| **edited** | [`flags.11?true`](type/true) | Indicates whether the story was edited |
| **contacts** | [`flags.12?true`](type/true) | Whether this story can only be viewed by our contacts |
| **selected_contacts** | [`flags.13?true`](type/true) | Whether this story can only be viewed by a select list of our contacts |
| **out** | [`flags.16?true`](type/true) | indicates whether we sent this story |
| <mark>id</mark> | [`int`](type/int) | ID of the story |
| <mark>date</mark> | [`int`](type/int) | When was the story posted |
| **from_id** | [`flags.18?Peer`](type/Peer) | Sender of the story |
| **fwd_from** | [`flags.17?StoryFwdHeader`](type/StoryFwdHeader) | For reposted stories », contains info about the original story |
| <mark>expire_date</mark> | [`int`](type/int) | When does the story expire |
| **caption** | [`flags.0?string`](type/string) | Story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>media</mark> | [`MessageMedia`](type/MessageMedia) | Story media |
| **media_areas** | [`flags.14?Vector<MediaArea>`](type/MediaArea) | List of media areas, see here » for more info on media areas |
| **privacy** | [`flags.2?Vector<PrivacyRule>`](type/PrivacyRule) | Privacy rules indicating who can and can't view this story |
| **views** | [`flags.3?StoryViews`](type/StoryViews) | View date and reaction information |
| **sent_reaction** | [`flags.15?Reaction`](type/Reaction) | The reaction we sent |
| **albums** | [`flags.19?Vector<int>`](type/int) | Albums this story is part of |

---

## Type

[StoryItem](type/StoryItem)

---

## Example

```php
$storyItem = $client->storyItem(
	pinned : true,
	public : true,
	close_friends : true,
	min : true,
	noforwards : true,
	edited : true,
	contacts : true,
	selected_contacts : true,
	out : true,
	id : 66,
	date : 20,
	from_id : $client->peerUser(
		user_id : 195159709086905472,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : 6032873371073323598,
		),
		from_name : '9RDomSEX3N0UwtKf',
		story_id : 66,
	),
	expire_date : 89,
	caption : 'xmrz9R6PVLXFyQbt',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 62,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 6,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 65,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 27,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 72,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 28,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 83,
			language : 'AulIBZkXsqQfNizH',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 19,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 9,
			user_id : 6296981638581768877,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 21,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 97,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 94,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 92,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 50,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 85,
			document_id : -2420234692713365254,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 13,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1712916.763671875,
				y : 1567171.068359375,
				w : -333977.8095703125,
				h : -1735508.21484375,
				rotation : 178605.2900390625,
				radius : 1316418.69140625,
			),
			geo : $client->geoPointEmpty(),
			title : 'eSiBl0yFG9KOWEYa',
			address : 'zQ4nWcfFRXHG3TmC',
			provider : 'ONmKQiVtsofE8dkX',
			venue_id : 'MB8hSJ3Ef9l0FuHw',
			venue_type : 'mZbv8wAnCIkGfzhF',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 317608.7041015625,
				y : -378536.0986328125,
				w : -355708.82421875,
				h : 2065908.1435546875,
				rotation : -606946.7919921875,
				radius : -1209980.0498046875,
			),
			query_id : 1193628369660021847,
			result_id : 'UZRbKOhp5P7H0n8r',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1765746.4072265625,
				y : 814769.0166015625,
				w : 1535436.490234375,
				h : -1262002.3037109375,
				rotation : -1999118.9130859375,
				radius : -1220899.00390625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'teIS1V3CJ7h2fs5Z',
				state : 'LdV0pAvO4QxlI3qk',
				city : 'pQcTFBSvltf97L2O',
				street : 'J3XoUdOSxvNfHt61',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1497901.9501953125,
				y : 1794912.814453125,
				w : 210613.447265625,
				h : -1758547.5537109375,
				rotation : 1350444.9375,
				radius : -267814.0400390625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 966777.48828125,
				y : 445004.9462890625,
				w : 1497048.025390625,
				h : 291823.033203125,
				rotation : 488800.8525390625,
				radius : -1555670.5283203125,
			),
			channel_id : 1250695259691121378,
			msg_id : 2,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1933557.453125,
				y : 106980.1474609375,
				w : 1158845.203125,
				h : -8356.21484375,
				rotation : -1380954.5830078125,
				radius : 332313.212890625,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 20,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -571129.0283203125,
				y : 974466.9921875,
				w : -1722558.69921875,
				h : -1217409.8974609375,
				rotation : 948102.6708984375,
				radius : -1923693.03515625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1522568.59375,
				y : -86529.2470703125,
				w : 1475728.2255859375,
				h : -1852091.01953125,
				rotation : 400825.837890625,
				radius : -793811.8798828125,
			),
			emoji : 'gofdnD8K0zWCPpey',
			temperature_c : -1024999.6474609375,
			color : 35,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1755705,
				y : -822852.900390625,
				w : 1917587.5654296875,
				h : -1115571.51953125,
				rotation : 2058871.12109375,
				radius : -76111.6552734375,
			),
			slug : 'tWA8crCbYKBv1m6l',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-7143900816691505379),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-3391714208454461590),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-6022759927913718473),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-6236185830543028075),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 68,
		forwards_count : 99,
		reactions : array(
			$client->reactionCount(
				chosen_order : 2,
				reaction : $client->reactionEmpty(),
				count : 91,
			),
		),
		reactions_count : 12,
		recent_viewers : array(1704797218794621484),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(70),
);
```