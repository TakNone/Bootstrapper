# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 218

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| **max_read_id** | [`flags.0?int`](type/int) | If set, contains the ID of the maximum read story |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |

---

## Type

[PeerStories](type/PeerStories)

---

## Example

```php
$peerStories = $client->peerStories(
	peer : $client->peerUser(
		user_id : -3561472696726438363,
	),
	max_read_id : 78,
	stories : array(
		$client->storyItemDeleted(
			id : 63,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 70,
			date : 61,
			expire_date : 75,
		),
		$client->storyItem(
			pinned : true,
			public : true,
			close_friends : true,
			min : true,
			noforwards : true,
			edited : true,
			contacts : true,
			selected_contacts : true,
			out : true,
			id : 95,
			date : 86,
			from_id : $client->peerUser(
				user_id : -6162035596820605761,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 6299077375956899002,
				),
				from_name : 'v1PIpgxjA6J9HRbB',
				story_id : 73,
			),
			expire_date : 83,
			caption : 'q1Ypj7yfJmDzTdEs',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 39,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 11,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 20,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 86,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 72,
					language : 'aNLe5huqTl3CYcVX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 66,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : -4191588897118136555,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 55,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 61,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : -4610298498347083655,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 332027.689453125,
						y : -229578.1708984375,
						w : 1797967.8505859375,
						h : 378918.9462890625,
						rotation : -117534.12890625,
						radius : -1989271.0400390625,
					),
					geo : $client->geoPointEmpty(),
					title : 'GRvkZqJi0N8zKn3U',
					address : 'k206ohqiQJFY8UBr',
					provider : 'hdQK9YAUMFH5eZpN',
					venue_id : '5zYQXvoKs8ejBJUr',
					venue_type : 'su49VO1dBUa8b0NQ',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -2009387.6513671875,
						y : -156801.93359375,
						w : -370632.0673828125,
						h : 1230493.310546875,
						rotation : -1208247.4013671875,
						radius : 502787.359375,
					),
					query_id : -7286532557510230303,
					result_id : 'HnYXaxTkhMUSe51r',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -1940491.01171875,
						y : 2072262.9501953125,
						w : 2090767.7431640625,
						h : 1598184.0712890625,
						rotation : 407170.1474609375,
						radius : -592345.3896484375,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'N86e4iZUEqa3vIT1',
						state : 'sSxXbprCO7ZIwR0h',
						city : 'kpjOE3MLvcN2qzeg',
						street : 'Xhp8ZFkjN7S3qVna',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : 1532758.9501953125,
						y : 1637565.3212890625,
						w : -1486192.998046875,
						h : 375186.560546875,
						rotation : 1326311.59765625,
						radius : 711129.130859375,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -345014.201171875,
						y : -152135.5859375,
						w : -1623581.2236328125,
						h : -721146.0078125,
						rotation : -769964.076171875,
						radius : 563349.8994140625,
					),
					channel_id : -4347549525690785484,
					msg_id : 10,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -1639699.3896484375,
						y : 601317.1279296875,
						w : 585325.0234375,
						h : 1088647.4072265625,
						rotation : -1947674.90234375,
						radius : 816603.78125,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 54,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -1367953.375,
						y : 1028346.0498046875,
						w : 1791195.3115234375,
						h : 959544.9794921875,
						rotation : -1420545.744140625,
						radius : 639887.9853515625,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : 2033703.0947265625,
						y : 898525.08984375,
						w : 1299703.9697265625,
						h : 1875491.44140625,
						rotation : 834815.7958984375,
						radius : 650737.4755859375,
					),
					emoji : '3atHW1vplg2wIyzN',
					temperature_c : -6481.9423828125,
					color : 56,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : 1858268.88671875,
						y : 929130.560546875,
						w : 796307.205078125,
						h : -505535.619140625,
						rotation : -2045551.802734375,
						radius : -405367.6787109375,
					),
					slug : 'ePa50KyQMCR263Aj',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(310101922010909039),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2445562516689970855),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-5138053754341259395),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(45918824740539918),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 22,
				forwards_count : 87,
				reactions : array(
					$client->reactionCount(
						chosen_order : 57,
						reaction : $client->reactionEmpty(...),
						count : 47,
					),
				),
				reactions_count : 31,
				recent_viewers : array(7634096704169561216),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(32),
		),
	),
);
```