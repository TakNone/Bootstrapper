# stories.allStories

**Description** : *Full list of active \(or active and hidden\) stories*

**Layer** : 222

```tl
stories.allStories#6efc5e81 flags:# has_more:flags.0?true count:int state:string peer_stories:Vector<PeerStories> chats:Vector<Chat> users:Vector<User> stealth_mode:StoriesStealthMode = stories.AllStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_more** | [`flags.0?true`](type/true) | Whether more results can be fetched as described here » |
| <mark>count</mark> | [`int`](type/int) | Total number of active (or active and hidden) stories |
| <mark>state</mark> | [`string`](type/string) | State to use for pagination |
| <mark>peer_stories</mark> | [`Vector<PeerStories>`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>stealth_mode</mark> | [`StoriesStealthMode`](type/StoriesStealthMode) | Current stealth mode information |

---

## Type

[stories.AllStories](type/stories.AllStories)

---

## Example

```php
$storiesAllStories = $client->stories->allStories(
	has_more : true,
	count : 88,
	state : 'MyjqDHRpngIZta2P',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : 4273452476933350454,
			),
			max_read_id : 96,
			stories : array(
				$client->storyItemDeleted(
					id : 74,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 23,
					date : 90,
					expire_date : 87,
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
					id : 2,
					date : 62,
					from_id : $client->peerUser(
						user_id : -260550327408356002,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'uwktOqo1N03VzsYK',
						story_id : 8,
					),
					expire_date : 49,
					caption : 'dtH7LyQ1YCaNbOEz',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 34,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 69,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 94,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 46,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 27,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 22,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 10,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 38,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 43,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 79,
							language : '2XsmGYW1pQMHgLlq',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 52,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 50,
							user_id : -2575450786123662981,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 88,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 6,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 24,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 22,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 83,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 31,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 94,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 87,
							document_id : -5219066910507258955,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 21,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : '5L873ehZjDMTfEzi',
							address : 'qi7nU1sAh8KRWjfD',
							provider : 'suYPcFBDZfMTvSwg',
							venue_id : 'DElWjsXn8OCfayIA',
							venue_type : 'v2iRbx9TuI15SqAL',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : -2922907985126801185,
							result_id : 'dz49FUCSvOPlBtep',
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
							channel_id : -4999806229241833136,
							msg_id : 82,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(channel : '@LiveProto'),
							msg_id : 82,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : '7SlfnV6LZ2uckpGA',
							temperature_c : -634751.5078125,
							color : 71,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : 'mpr748NdQ2i9nxL1',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(-1807566033959726398),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(-7920438561221636617),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(-2708010946055175598),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(1853693537181613757),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 19,
						forwards_count : 77,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 66,
						recent_viewers : array(-1797304089514964496),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(30),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -353605361290863568,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5395208645646902683,
			title : 'YbCvNQ3uZ7erjJ82',
			photo : $client->chatPhotoEmpty(),
			participants_count : 37,
			date : 42,
			version : 27,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 7,
			),
		),
		$client->chatForbidden(
			id : -1360062833211914915,
			title : 'amNSi2dzYb74386E',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 5079214599171803809,
			access_hash : 1715146357123628154,
			title : '812ch3tukr7LWwDd',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XYHUdrcDogFP096j',
					reason : '8aMQvKSPCHgLd0Et',
					text : 'n2DYiPfoysLRlV48',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 32,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 95,
			),
			participants_count : 20,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 61,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -3091751808994806842,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : 4856860973841490823,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 100,
			subscription_until_date : 3,
			bot_verification_icon : 4492083572373634611,
			send_paid_messages_stars : -3759595397854759942,
			linked_monoforum_id : 8952537241396658276,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5941793719095301411,
			access_hash : -6924719567172647421,
			title : 'bMiIAV7LDmh3n8sl',
			until_date : 70,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6128337645392019637,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			id : 4221729091794216805,
			access_hash : 3359016527320377991,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0UvyIAsfnZFQET4G',
					reason : '2XztpwCVj48oOPLE',
					text : 'luyXCstWV72Jn5BD',
				),
			),
			bot_inline_placeholder : '5C2trhj3yYqAUJ4z',
			lang_code : 'hUzGFQrXV7ZxWAI8',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 44,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 3915724792304261177,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 7306999463154306382,
			),
			bot_active_users : 76,
			bot_verification_icon : -4878273136404490352,
			send_paid_messages_stars : 7056984893157831440,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 45,
		cooldown_until_date : 4,
	),
);
```