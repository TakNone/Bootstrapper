# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 214

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : -8677369142186578528,
	),
	max_read_id : 73,
	stories : array(
		$client->storyItemDeleted(
			id : 51,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 68,
			date : 14,
			expire_date : 71,
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
			id : 74,
			date : 36,
			from_id : $client->peerUser(
				user_id : 3582949224439761004,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'tOQz7B4R60u5esxX',
				story_id : 17,
			),
			expire_date : 47,
			caption : 'sjTfF3H6IhKGPw5e',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 63,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : 'vD5fZJRxBC37Gtp4',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 72,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : 7121884011417968832,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 16,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 10,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 48,
					document_id : 6257514073367074452,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 61,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'iWy0DwMLJnlGEIRH',
					address : 'D6AWhKgrUR9lxCv0',
					provider : 'YP0GnI4yvfTQhH9z',
					venue_id : 'ApaN4xiQYmyG3vkj',
					venue_type : 'tj3NkOr4fDhsnlFL',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -7430702896052159759,
					result_id : 'jGrDCAaRML46gpun',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					address : $client->geoPointAddress(...),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(...),
					reaction : $client->reactionEmpty(...),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel_id : 7015646994616276400,
					msg_id : 45,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 23,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'VCrugaO7UqGHExls',
					temperature_c : 1701037.28515625,
					color : 23,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'huBAli3SMmVXrIwG',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-6856789241991618194),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-8519146482794449056),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-4939086884731367249),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4275048486558572448),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 8,
				forwards_count : 69,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 29,
				recent_viewers : array(-2830097960803728706),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(20),
		),
	),
);
```