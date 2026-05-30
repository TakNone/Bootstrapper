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
	count : 97,
	state : 'tGvlepkAmxCjEwd7',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : -2051806874556020127,
			),
			max_read_id : 75,
			stories : array(
				$client->storyItemDeleted(
					id : 96,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 38,
					date : 51,
					expire_date : 42,
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
					id : 6,
					date : 98,
					from_id : $client->peerUser(
						user_id : 5832581246610872422,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'EUo0HMfuIQSG2nWA',
						story_id : 26,
					),
					expire_date : 93,
					caption : 'Je4OGmUVBRdaNpA1',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 10,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 32,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 100,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 89,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 58,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 10,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 17,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 61,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 61,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 98,
							language : 'CAjPlyfY0Hohu61J',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 67,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 0,
							user_id : -7210669195476673155,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 78,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 87,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 67,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 68,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 67,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 31,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 8,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 33,
							document_id : 8559220903847268587,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 64,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : 'CnhZGYNoayk8Ir9V',
							address : 'f3tFDJzI5BEcgslx',
							provider : '9vMfU5nXQH2yD4Z1',
							venue_id : '7foUGOyZ9u2jeWcd',
							venue_type : 'loytsMz4eu8R6nGv',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : -1657151872147716589,
							result_id : 'cKZ6j0sUwG1hRFQq',
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
							channel_id : 3671741018089189381,
							msg_id : 32,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(channel : '@LiveProto'),
							msg_id : 7,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : 'cvsVDY7h9y0WM3CA',
							temperature_c : -384681.140625,
							color : 74,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : 'GZW7ovbdB5JEnTRw',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(-2526103486667762252),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(4875934427893380894),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(-3360750203959569899),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(2708048358691330498),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 24,
						forwards_count : 1,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 70,
						recent_viewers : array(-8762124091047159304),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(41),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3407073225602959598,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4016015172938076990,
			title : 'APkD647mXiqahjrL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 45,
			date : 43,
			version : 75,
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
				until_date : 49,
			),
		),
		$client->chatForbidden(
			id : 6367911531493654944,
			title : 'feIJXshmPWtwG6O5',
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
			id : 2239163883453499662,
			access_hash : 1362064001707824297,
			title : 'W5ykwAiOrv4Vb0UF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'o9MQ1yKE5mctLVO7',
					reason : 'dXCLwKqcVQmTZAEY',
					text : 'gXkACldfEjhczD5t',
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
				until_date : 85,
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
				until_date : 2,
			),
			participants_count : 67,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 52,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : 7972897556538205596,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : -3285407121398845433,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 30,
			subscription_until_date : 65,
			bot_verification_icon : 8877122928087034314,
			send_paid_messages_stars : 2898331897512977997,
			linked_monoforum_id : -8922742256431487909,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6988848672556526797,
			access_hash : 4071467612699175861,
			title : 'ijEJV6Fq5c8xR0K3',
			until_date : 11,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8942827187513377457,
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
			id : 2689924365897385140,
			access_hash : 8564551551198802775,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mLS5DWR6JC0pH8d2',
					reason : 'UFHGf8zerYoPd72V',
					text : 'QxXhuesn5RFv0iBD',
				),
			),
			bot_inline_placeholder : 'jb64Iqir53GwASCX',
			lang_code : 'hsJ65je2TL0kbzDl',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 4319008726611117296,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -6342024393162274036,
			),
			bot_active_users : 77,
			bot_verification_icon : 3070736526374553738,
			send_paid_messages_stars : -5189647562655477374,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 39,
		cooldown_until_date : 52,
	),
);
```