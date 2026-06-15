# stories.peerStories

**Description** : *Active story list of a specific peer*

**Layer** : 227

```tl
stories.peerStories#cae68768 stories:PeerStories chats:Vector<Chat> users:Vector<User> = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stories</mark> | [`PeerStories`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.PeerStories](type/stories.PeerStories)

---

## Example

```php
$storiesPeerStories = $client->stories->peerStories(
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -2554795053260440953,
		),
		max_read_id : 7,
		stories : array(
			$client->storyItemDeleted(
				id : 74,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 71,
				date : 50,
				expire_date : 1,
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
				id : 52,
				date : 39,
				from_id : $client->peerUser(
					user_id : 2183053069235389538,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'HP9bmYMGvqI5r70i',
					story_id : 3,
				),
				expire_date : 99,
				caption : '7eoAnR9ZjW83qPSx',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 81,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 46,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 71,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 18,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 17,
						language : 'Ton8ClHzmRhkS3gZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 19,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 3,
						user_id : -4040836451269140719,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 28,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 54,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 61,
						document_id : 3499892137753980450,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 97,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 55,
						date : 49,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 71,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 10,
						old_text : 'CgOvYwisUb1rHmaI',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 40,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'iHzVQEo1D5gdlIYO',
						address : 'Gcwyn9CmqgbuAJTe',
						provider : 'eV1or3EBPwGqzdgL',
						venue_id : 'tROF4oNUWHpdbfYi',
						venue_type : 'NAcwasW7I9ibRtm4',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : -4400375303722556464,
						result_id : 'eyS0OBt7m8CdN2bs',
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
						channel_id : 8326475891079181157,
						msg_id : 11,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 91,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'FkdYvizajGZVwRSy',
						temperature_c : -218036.5595703125,
						color : 30,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'oMrGFyONUdiVEAIn',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-983920306203820318),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-6440326123408641371),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(753789866462250682),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(2466850462265902919),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 94,
					forwards_count : 71,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 100,
					recent_viewers : array(2157768087300761579),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(88),
				music : $client->documentEmpty(
					id : 8959469795743379124,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1369661267502612460,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -9070704248372012483,
			title : 'TAUx1IJanQE5WVt7',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 81,
			version : 83,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 98,
			),
		),
		$client->chatForbidden(
			id : 8286865854025412850,
			title : '9RwahEsp6Z5z7uJS',
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
			id : -3440276611282477144,
			access_hash : -1782624157744347931,
			title : 'eZ5tlEwdTqpc3Pzh',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nISfXpYgWb9Fx36m',
					reason : 'uz4MZ9Cv5f3Nerds',
					text : 'ELZ850qpSaGKPuzU',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 27,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 83,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 88,
			),
			color : $client->peerColor(
				color : 59,
				background_emoji_id : -958447455055151358,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : 5761725336784785764,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 13,
			subscription_until_date : 75,
			bot_verification_icon : 8231844935947133621,
			send_paid_messages_stars : -2092790983275281734,
			linked_monoforum_id : -1835386722060872152,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3544391178323461404,
			access_hash : -4257295745339675940,
			title : 'TzGPXVk2R7vsKW1x',
			until_date : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8869614876520812073,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : -8568941362220648706,
			access_hash : -190840801510965328,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BRyDP17KqcNVQGmt',
					reason : '8MkWvp7EwrIcsU9N',
					text : '0dWYOXE4QVR3snj7',
				),
			),
			bot_inline_placeholder : 'uxbX3mq2NnJIDVoG',
			lang_code : 'siJPcde7hjrlVBuN',
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
				max_id : 73,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 2258767862458833549,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -750492261621416900,
			),
			bot_active_users : 59,
			bot_verification_icon : 538823291205420100,
			send_paid_messages_stars : 5556439586020984931,
		),
	),
);
```