# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 211

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 39,
				peer_id : $client->peerUser(...),
			),
			pts : 78,
			pts_count : 33,
		),
		$client->updateMessageID(
			id : 93,
			random_id : 6783011165628477037,
		),
		$client->updateDeleteMessages(
			messages : array(21),
			pts : 32,
			pts_count : 82,
		),
		$client->updateUserTyping(
			user_id : 33632869153911395,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7945606506227016809,
			from_id : $client->peerUser(
				user_id : -1815360568584156651,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 4520740169668546381,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 4528065069123054614,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 3327934290194150886,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 2819864417332483255,
			date : 70,
			device : 'ojiUma54V1pE6dJG',
			location : 'HPSXw3LEb9Ff8sD0',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -7974556501123572428,
				chat_id : 60,
				date : 21,
				bytes : '???tLiveProto?u?a',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 99,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 13,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 51,
			),
			date : 70,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 49,
			max_date : 0,
			date : 50,
		),
		$client->updateChatParticipantAdd(
			chat_id : 5402971099635140876,
			user_id : -3017478567115089245,
			inviter_id : -2290441736578169337,
			date : 44,
			version : 90,
		),
		$client->updateChatParticipantDelete(
			chat_id : -8592416076032778375,
			user_id : -1748359361176445985,
			version : 9,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 0,
					ip_address : '127.0.0.1',
					port : 2,
					secret : '??v?LiveProto??L?E',
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : $client->boolFalse(...),
				silent : $client->boolFalse(...),
				mute_until : 20,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : $client->boolFalse(...),
				stories_hide_sender : $client->boolFalse(...),
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 50,
			type : '0gMCKTlF7SbRk3fN',
			message : 'sfy7HPzpUGiTMWQl',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 21,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 2,
					length : 80,
				),
				$client->messageEntityHashtag(
					offset : 54,
					length : 10,
				),
				$client->messageEntityBotCommand(
					offset : 67,
					length : 31,
				),
				$client->messageEntityUrl(
					offset : 18,
					length : 92,
				),
				$client->messageEntityEmail(
					offset : 53,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 23,
					length : 74,
				),
				$client->messageEntityItalic(
					offset : 15,
					length : 18,
				),
				$client->messageEntityCode(
					offset : 4,
					length : 0,
				),
				$client->messageEntityPre(
					offset : 57,
					length : 43,
					language : 'bwQe7R3KMu8TpNai',
				),
				$client->messageEntityTextUrl(
					offset : 97,
					length : 97,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 32,
					length : 33,
					user_id : 8716325992964679541,
				),
				$client->inputMessageEntityMentionName(
					offset : 62,
					length : 18,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 57,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 44,
					length : 98,
				),
				$client->messageEntityUnderline(
					offset : 61,
					length : 61,
				),
				$client->messageEntityStrike(
					offset : 10,
					length : 63,
				),
				$client->messageEntityBankCard(
					offset : 29,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 22,
					length : 21,
				),
				$client->messageEntityCustomEmoji(
					offset : 91,
					length : 50,
					document_id : 8414616950581131870,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 85,
					length : 99,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(1714273005343696405),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(7430271708070415984),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-650986973495267518),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-6881294992411099543),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -2734675839915799876,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 10,
			peer : $client->peerUser(
				user_id : 109502949370655247,
			),
			max_id : 97,
			still_unread_count : 67,
			pts : 34,
			pts_count : 95,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -10018068870954626,
			),
			max_id : 97,
			pts : 70,
			pts_count : 11,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 533272875121254931,
				url : 'https://docs.liveproto.dev',
			),
			pts : 33,
			pts_count : 36,
		),
		$client->updateReadMessagesContents(
			messages : array(99),
			pts : 76,
			pts_count : 65,
			date : 84,
		),
		$client->updateChannelTooLong(
			channel_id : 1360426995518912270,
			pts : 93,
		),
		$client->updateChannel(
			channel_id : 111295367206055888,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(...),
			),
			pts : 39,
			pts_count : 69,
		),
		$client->updateReadChannelInbox(
			folder_id : 47,
			channel_id : 7768181432788005428,
			max_id : 14,
			still_unread_count : 0,
			pts : 56,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -399180239378089134,
			messages : array(98),
			pts : 58,
			pts_count : 51,
		),
		$client->updateChannelMessageViews(
			channel_id : -5423592544296483270,
			id : 74,
			views : 54,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 7097784541047015284,
			user_id : 7134149563275715386,
			is_admin : $client->boolFalse(),
			version : 91,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-5525108636870066767),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 2056063036131462866,
			user_id : -7693974947483001024,
			query : 'aQXbNwPZVj9AMfIg',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '7z543M0FZhDa1fq9',
		),
		$client->updateBotInlineSend(
			user_id : 6056196473378073645,
			query : 'E1GQ2W7y4kMzINte',
			geo : $client->geoPointEmpty(),
			id : 'X8UhruBtG5fOWQlz',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 20,
				id : -4282506234677935647,
				access_hash : -2077564849641402521,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(...),
			),
			pts : 72,
			pts_count : 80,
		),
		$client->updateBotCallbackQuery(
			query_id : 3360417438447608118,
			user_id : -3358898493473466227,
			peer : $client->peerUser(
				user_id : 7003521553911830745,
			),
			msg_id : 64,
			chat_instance : 510996449540962577,
			data : '?O<??LiveProtoƋ?|',
			game_short_name : 'rKIlsPefR8QW0Ct4',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(...),
			),
			pts : 47,
			pts_count : 61,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -7255663458301115923,
			user_id : 108297007362452596,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 27,
				id : -5578365606355638205,
				access_hash : -4340003120723774492,
			),
			chat_instance : -8258886783061012703,
			data : '??2j?LiveProto[??',
			game_short_name : 'Xs9v1Pw7yI0biWU4',
		),
		$client->updateReadChannelOutbox(
			channel_id : 4163929897521823125,
			max_id : 64,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -8312997807769585675,
			),
			top_msg_id : 16,
			saved_peer_id : $client->peerUser(
				user_id : 2828504089004746911,
			),
			draft : $client->draftMessageEmpty(
				date : 19,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 5286902153925232586,
			webpage : $client->webPageEmpty(
				id : -7566073306614993553,
				url : 'https://docs.liveproto.dev',
			),
			pts : 7,
			pts_count : 52,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 0,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 12,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 97,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'YAs26BfTjSZnUItb',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 3359490249867666984,
			data : $client->dataJSON(
				data : 'u1TvoOJZfbH9mdUF',
			),
			timeout : 75,
		),
		$client->updateBotShippingQuery(
			query_id : 7853123412956454829,
			user_id : 6973227235231869245,
			payload : '?9?X$LiveProto??oe+',
			shipping_address : $client->postAddress(
				street_line1 : 'WdcNb72g0ZoOXTUv',
				street_line2 : 'p8jBvkr240FyNlDb',
				city : 'HCZ1jsgkhc8Io35V',
				state : '8FMLH1PefqRADnYj',
				country_iso2 : 'Qc7hCaLV0fepdOjJ',
				post_code : 'uSKIqtYXjO28xNcW',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -5334181334885419770,
			user_id : 5101326835710176035,
			payload : '@=%?6LiveProto9G?_?',
			info : $client->paymentRequestedInfo(
				name : 'KzwgS5IRYupAm6Z3',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'R4HVzZQPlMdryps0',
			currency : 'YnRW1LuvDbw6xMgV',
			total_amount : -3679815444800998448,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -2812022604025924882,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '5GeXfjw8oxSLOV0D',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'xZyTQuW4mLd7XkGe',
				from_version : 94,
				version : 30,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -4552923551189756787,
			top_msg_id : 72,
			saved_peer_id : $client->peerUser(
				user_id : 6691754243836328519,
			),
			messages : array(4),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 4837871446297107088,
			available_min_id : 29,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4536995597498992456,
			),
		),
		$client->updateMessagePoll(
			poll_id : -6046117259614228050,
			poll : $client->poll(
				id : -5469745564780910039,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 9,
				close_date : 14,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 27,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'HtFU8RVmfiaclTAE',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 5813065956660416777,
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
				until_date : 24,
			),
			version : 89,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 8,
				),
			),
			pts : 72,
			pts_count : 18,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 1268383244874516276,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 75,
				request_chat_title : 'EyO14lqmFsJr0LNZ',
				request_chat_date : 71,
				business_bot_id : -5633612264165304597,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -8555590145257167962,
				registration_month : 'U2zSmDOx1Y5HkoJ7',
				phone_country : '+1234567890',
				name_change_date : 15,
				photo_change_date : 46,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 72,
					distance : 81,
				),
				$client->peerSelfLocated(
					expires : 5,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -7598558143640109120,
			),
			messages : array(28),
			sent_messages : array(12),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 1089185590268826659,
				access_hash : -6566305062137088102,
				slug : 'V9pDmR8hxPkJ6ebs',
				title : 'WJ9b3NHn8FTGYiCh',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'KsOdHhljr9fm84Zc',
				installs_count : 55,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7809495148577734254,
			),
			msg_id : 21,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 4618888583494906974,
			peer : $client->peerUser(
				user_id : -2779931311820657624,
			),
			options : array('|?ĹELiveProto?!Ō4'),
			qts : 55,
		),
		$client->updateDialogFilter(
			id : 83,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 94,
				title : $client->textWithEntities(...),
				emoticon : 'P6x3KAZEswcGjklq',
				color : 44,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(10),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -271194841220389604,
			data : '????LiveProto??*b',
		),
		$client->updateChannelMessageForwards(
			channel_id : -4811181016342032691,
			id : 82,
			forwards : 63,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2956636946133306066,
			top_msg_id : 39,
			read_max_id : 39,
			broadcast_id : -7503648152248445850,
			broadcast_post : 26,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 6588471053672735775,
			top_msg_id : 87,
			read_max_id : 16,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -826797418483061401,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1960291841555002800,
			top_msg_id : 61,
			from_id : $client->peerUser(
				user_id : 3255575068018666903,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -6743464988415507034,
			),
			messages : array(70),
			pts : 97,
			pts_count : 93,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 1018605586039589897,
			messages : array(70),
			pts : 72,
			pts_count : 85,
		),
		$client->updateChat(
			chat_id : -1063025638248676211,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -5250115103499718113,
				access_hash : 6022697111285396848,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 74,
					active_date : 91,
					source : 83,
					volume : 82,
					about : 'YxwkPyvHoMG9EUpr',
					raise_hand_rating : -5087648270790097778,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 63,
		),
		$client->updateGroupCall(
			chat_id : -122963749764528922,
			call : $client->groupCallDiscarded(
				id : 7200439125576593320,
				access_hash : 6591133594766688319,
				duration : 63,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 7671014946010501332,
			),
			ttl_period : 22,
		),
		$client->updateChatParticipant(
			chat_id : 4704348635861671768,
			date : 28,
			actor_id : 5856277885888453139,
			user_id : -5193334934440445981,
			prev_participant : $client->chatParticipant(
				user_id : -6815968345140112419,
				inviter_id : 7753342342345200284,
				date : 60,
			),
			new_participant : $client->chatParticipant(
				user_id : 8661497671447454778,
				inviter_id : -237224816448565150,
				date : 90,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'AQNzueFmVORTScqv',
				admin_id : 481814600946474951,
				date : 39,
				start_date : 67,
				expire_date : 14,
				usage_limit : 8,
				usage : 84,
				requested : 78,
				subscription_expired : 27,
				title : 'XhAdxytsQaMDPLOb',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 74,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -4114688803985526821,
			date : 20,
			actor_id : -139373808575833795,
			user_id : -4464857899514888138,
			prev_participant : $client->channelParticipant(
				user_id : 317150525713798943,
				date : 43,
				subscription_until_date : 91,
			),
			new_participant : $client->channelParticipant(
				user_id : 4866506737459318121,
				date : 49,
				subscription_until_date : 38,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'jIn9P3k14FhXAViC',
				admin_id : -4623923412324619781,
				date : 60,
				start_date : 50,
				expire_date : 27,
				usage_limit : 61,
				usage : 50,
				requested : 48,
				subscription_expired : 52,
				title : 'CrY2o3VwKD4s8IOS',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 54,
		),
		$client->updateBotStopped(
			user_id : -4166577366168719578,
			date : 61,
			stopped : $client->boolFalse(),
			qts : 98,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'ueJoUwmW781qgCpR',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -7013562137779462852,
			),
			bot_id : -656624212340195225,
			commands : array(
				$client->botCommand(
					command : 'Fmob6dKMfaHiOXUJ',
					description : 'haob2OW89SLGK1km',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 9055468545650354504,
			),
			requests_pending : 3,
			recent_requesters : array(7211501865545499724),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7511217276521921835,
			),
			date : 93,
			user_id : 762107438186262580,
			about : 'U1mNHOK9QdwGgc2l',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'y2iOjBSv9TakN3UL',
				admin_id : 7486146608687098526,
				date : 3,
				start_date : 0,
				expire_date : 13,
				usage_limit : 88,
				usage : 20,
				requested : 6,
				subscription_expired : 57,
				title : 'WGDzC28RbS7XsvKy',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 25,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -5888585214729070447,
			),
			msg_id : 85,
			top_msg_id : 64,
			saved_peer_id : $client->peerUser(
				user_id : -7997928318854923796,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -3318843027651705235,
		),
		$client->updateBotMenuButton(
			bot_id : -6436341174444825786,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -4924195226768245938,
			),
			msg_id : 36,
			transcription_id : -1974948486314145237,
			text : '8djqoJ5KhzgswaF9',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -6371700801633974606,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 6421012315941793364,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 4304145472746080511,
			),
			msg_id : 52,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 28,
					h : 30,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 28,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -1797398465102963902,
			topic_id : 96,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 3182630054414945573,
			order : array(92),
		),
		$client->updateUser(
			user_id : -2190427118395147231,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -3470028543006713150,
			),
			story : $client->storyItemDeleted(
				id : 41,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -7607550654328166939,
			),
			max_id : 53,
		),
		$client->updateStoryID(
			id : 72,
			random_id : -7909711463116590905,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 90,
				cooldown_until_date : 35,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 9006190867549022804,
			),
			story_id : 34,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 523492598342588115,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'DMhSGl1tgaicpOzn',
				user_id : 5291552300197594985,
				giveaway_msg_id : 87,
				date : 62,
				expires : 88,
				used_gift_slug : 'bzLnU5xcmuOD7Ypy',
				multiplier : 29,
				stars : -3131734136398588279,
			),
			qts : 49,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 994107325158710073,
			enabled : $client->boolFalse(),
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -3686892136817730833,
			),
			wallpaper : $client->wallPaper(
				id : -6920625961376632576,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 6378513360304098111,
				slug : 'lPXFvAmOWpQJ85Tq',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 6077208995543527423,
			),
			msg_id : 39,
			date : 100,
			actor : $client->peerUser(
				user_id : -7815347975005631554,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '3GMKugVCFXkNvqsr',
				),
				$client->reactionCustomEmoji(
					document_id : 5909605843031537870,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '0ZdEAj6YBOnsmu8b',
				),
				$client->reactionCustomEmoji(
					document_id : -6267963345803632992,
				),
				$client->reactionPaid(),
			),
			qts : 50,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -3052416291881921601,
			),
			msg_id : 16,
			date : 33,
			reactions : array(
				$client->reactionCount(
					chosen_order : 73,
					reaction : $client->reactionEmpty(...),
					count : 14,
				),
			),
			qts : 10,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 66,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'hEvd3bYXTQglnFGo',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 33,
					shortcut : '8QtcASpUerbTOs5o',
					top_message : 36,
					count : 83,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 67,
				shortcut : '2X1NPdvLrBpecD4F',
				top_message : 99,
				count : 100,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 24,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 65,
			messages : array(91),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'NDtVARyZjs5G8gw2',
				user_id : -7081379680073128341,
				dc_id : 95,
				date : 52,
				rights : $client->businessBotRights(...),
			),
			qts : 47,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'fPBMwj6CLWedtK2c',
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(...),
			),
			qts : 32,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'eq3iSLjUtpFTws82',
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 13,
				peer_id : $client->peerUser(...),
			),
			qts : 19,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '2vnfJ4YK6BG5FAhD',
			peer : $client->peerUser(
				user_id : -4071290239933047951,
			),
			messages : array(93),
			qts : 56,
		),
		$client->updateNewStoryReaction(
			story_id : 48,
			peer : $client->peerUser(
				user_id : 1843160698992503607,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -8861362908839139500,
				nanos : 22,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 8368740256655330074,
			user_id : -7781293598076851058,
			connection_id : 'mWiOce4HK1IQ3EvS',
			message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -2333278851630597421,
			data : '?a??LiveProto?AM^',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 7837080752789069708,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 54,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 5887196257739296738,
			payload : 'IcdYL4en1Fjbf2Ur',
			qts : 94,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 73,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 7420259818931777611,
				access_hash : 6134467007758408732,
			),
			sub_chain_id : 87,
			blocks : array('?Le?LiveProto???O?'),
			next_offset : 20,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 2309426656053606499,
			saved_peer_id : $client->peerUser(
				user_id : -7747399432349943702,
			),
			read_max_id : 63,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -5758499989099743071,
			saved_peer_id : $client->peerUser(
				user_id : -4705124346509885138,
			),
			read_max_id : 28,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 2725522991633842566,
			saved_peer_id : $client->peerUser(
				user_id : 1534888290457537976,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 2914875962897594301,
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
			id : -3246948760100703632,
			access_hash : 4629870170434294430,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BHiMcuLtSj7Ivl2h',
					reason : 'DEYjZuBMdmU4z7R5',
					text : 'yZpnI8Acojb2GNP5',
				),
			),
			bot_inline_placeholder : '3uZMh86ekU5noG4b',
			lang_code : 'EV7rKAGJbZhdfeY2',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 80,
			color : $client->peerColor(
				color : 98,
				background_emoji_id : -4466267750806474511,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : -8563764672115775628,
			),
			bot_active_users : 11,
			bot_verification_icon : 5923826046860001239,
			send_paid_messages_stars : 1410445398313771893,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2030899875024616070,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2660193981169115798,
			title : 'vztlOr4ZsGRDy0xU',
			photo : $client->chatPhotoEmpty(),
			participants_count : 53,
			date : 18,
			version : 100,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 95,
			),
		),
		$client->chatForbidden(
			id : -7980629205632332147,
			title : 'mZrhAvNOIfkax0wX',
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
			id : -8011531277016564867,
			access_hash : 2415872577359009290,
			title : 'exjDT3Cyf6Hi2XNF',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tnObWwzkIiBgXAUL',
					reason : 'QJm0BhSYxkWtiFwP',
					text : 'MYQScE981ICldymg',
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
				until_date : 38,
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
				until_date : 44,
			),
			participants_count : 40,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : 8227026584930149246,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : -6565333003164711690,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 24,
			subscription_until_date : 11,
			bot_verification_icon : -2592428362363961972,
			send_paid_messages_stars : 7020002277292687665,
			linked_monoforum_id : 3315750083780065055,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1610661633259509157,
			access_hash : -667729994537965992,
			title : 'iLF8khdcAmp9MWUu',
			until_date : 20,
		),
	),
	date : 96,
	seq_start : 39,
	seq : 22,
);
```