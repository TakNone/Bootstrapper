# stories.allStories

**Description** : *Full list of active \(or active and hidden\) stories*

**Layer** : 227

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
	count : 84,
	state : 'SbeTax2qflMH9YkK',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : 7719672670362229647,
			),
			max_read_id : 22,
			stories : array(
				$client->storyItemDeleted(
					id : 98,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 50,
					date : 19,
					expire_date : 66,
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
					id : 12,
					date : 1,
					from_id : $client->peerUser(
						user_id : 2104610212339418013,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'oiPphtxKIDY7ZjF9',
						story_id : 42,
					),
					expire_date : 88,
					caption : 'W2AxO0wYEfSytuCG',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 55,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 24,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 42,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 65,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 47,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 33,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 73,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 1,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 75,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 93,
							language : 'efTFEqKXCPGp1xMh',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 49,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 17,
							user_id : -7663663216106237848,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 12,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 6,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 7,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 35,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 96,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 34,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 39,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 100,
							document_id : -8165065699650084657,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 43,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 93,
							date : 34,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 31,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 14,
							old_text : 'H2L0oQq1unsk4aX8',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 53,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : 'dZWI7ikhwuGMrce3',
							address : 'Kf76gt3jap5uhJy2',
							provider : 'eGbTYDcMifUJyLx4',
							venue_id : 'XLCDhYNxRzOgrjTi',
							venue_type : 'rBlZDC4jQSekLcRy',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : -6332945216682292830,
							result_id : 'agxRkLZNjKzUqG0P',
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
							channel_id : 6525913303583227144,
							msg_id : 67,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(channel : '@LiveProto'),
							msg_id : 74,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : 'b4ZqWzhraiIwDFEH',
							temperature_c : 1385251.9091796875,
							color : 41,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : 'J9u2SO83pDCrnkxK',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(-6264788851471728247),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(8682028534041173378),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(2013671291110548259),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(-2852560474512285191),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 92,
						forwards_count : 4,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 43,
						recent_viewers : array(4123854072007007547),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(12),
					music : $client->documentEmpty(
						id : 4913193330572023396,
					),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7756407382458802139,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7272117192371650856,
			title : '9ybBPLpwCX4ngqh2',
			photo : $client->chatPhotoEmpty(),
			participants_count : 51,
			date : 71,
			version : 91,
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
			id : 3742913514936281108,
			title : 'Gst9a7MBLIwEp6Zi',
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
			id : 7471333275925697745,
			access_hash : -7010477160746520863,
			title : 'CyzbrZ054esxDWFn',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l3WxFhA8nR0brN6J',
					reason : '9EyCO43Wo1uaVSnk',
					text : 'EkVp3DIR8rwHelzJ',
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
				until_date : 67,
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
				until_date : 21,
			),
			participants_count : 75,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 69,
			),
			color : $client->peerColor(
				color : 33,
				background_emoji_id : 9211890623099645405,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -5303075883285887725,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 33,
			subscription_until_date : 80,
			bot_verification_icon : 936789094249503251,
			send_paid_messages_stars : 2970500677803811795,
			linked_monoforum_id : -9206010301181551975,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3516163003293473899,
			access_hash : -4221207101156648424,
			title : 'TX6g90GtHfiYSDs1',
			until_date : 75,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8986267553903320703,
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
			id : -4308327182614741609,
			access_hash : -4086239206319051788,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tJX2qiBWFKweTUCj',
					reason : 'euXh9mPJ5cgGdiw8',
					text : 'bzoBENe5T38pOmgX',
				),
			),
			bot_inline_placeholder : '2WQ6C7yDzmwAUaEI',
			lang_code : 'UZaxORDv90zkiXhV',
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
				max_id : 19,
			),
			color : $client->peerColor(
				color : 23,
				background_emoji_id : 6667042263333840192,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 5288292130920953185,
			),
			bot_active_users : 2,
			bot_verification_icon : -2176410528373130410,
			send_paid_messages_stars : -8563558066632373532,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 7,
		cooldown_until_date : 86,
	),
);
```