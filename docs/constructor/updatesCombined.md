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
				id : 23,
				peer_id : $client->peerUser(...),
			),
			pts : 3,
			pts_count : 79,
		),
		$client->updateMessageID(
			id : 68,
			random_id : -6570095591303778347,
		),
		$client->updateDeleteMessages(
			messages : array(67),
			pts : 22,
			pts_count : 90,
		),
		$client->updateUserTyping(
			user_id : -4041190732554626518,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7002457025285554509,
			from_id : $client->peerUser(
				user_id : -1252902612532523603,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -5351416543845093013,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 1325349874188002752,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 1564760164688987682,
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
			hash : 1843540403829989057,
			date : 35,
			device : '4WS1wMdaHKxQegYC',
			location : 'tXHP7O4law5Z3dkV',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -5774863350607996868,
				chat_id : 22,
				date : 89,
				bytes : 'ğqh;LiveProto??(C',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 4,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 20,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 56,
			),
			date : 69,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 9,
			max_date : 83,
			date : 15,
		),
		$client->updateChatParticipantAdd(
			chat_id : -3530374831068702827,
			user_id : -3113431114388830789,
			inviter_id : 6620655792429601101,
			date : 73,
			version : 3,
		),
		$client->updateChatParticipantDelete(
			chat_id : 5324879609876374470,
			user_id : -6497803962448151023,
			version : 87,
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
					id : 40,
					ip_address : '127.0.0.1',
					port : 64,
					secret : '??om?LiveProto??' . "\0" . ';',
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 28,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 23,
			type : '2nrbtSuHAqXaF5wU',
			message : 'ZKHxkFAWzIhny1Ts',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 28,
					length : 8,
				),
				$client->messageEntityMention(
					offset : 23,
					length : 67,
				),
				$client->messageEntityHashtag(
					offset : 91,
					length : 90,
				),
				$client->messageEntityBotCommand(
					offset : 79,
					length : 4,
				),
				$client->messageEntityUrl(
					offset : 72,
					length : 25,
				),
				$client->messageEntityEmail(
					offset : 43,
					length : 70,
				),
				$client->messageEntityBold(
					offset : 37,
					length : 14,
				),
				$client->messageEntityItalic(
					offset : 94,
					length : 86,
				),
				$client->messageEntityCode(
					offset : 45,
					length : 94,
				),
				$client->messageEntityPre(
					offset : 93,
					length : 90,
					language : 'x27oNDdFtAjfVePW',
				),
				$client->messageEntityTextUrl(
					offset : 75,
					length : 44,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 88,
					length : 41,
					user_id : -516348085781494428,
				),
				$client->inputMessageEntityMentionName(
					offset : 55,
					length : 64,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 19,
					length : 28,
				),
				$client->messageEntityCashtag(
					offset : 29,
					length : 58,
				),
				$client->messageEntityUnderline(
					offset : 19,
					length : 83,
				),
				$client->messageEntityStrike(
					offset : 72,
					length : 51,
				),
				$client->messageEntityBankCard(
					offset : 57,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 85,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 8,
					length : 61,
					document_id : 4464979269957785987,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 23,
					length : 2,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(4356491348605850095),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(194886528392435840),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(3514857273315522071),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(5023642129818487033),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 8532418784243421287,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 44,
			peer : $client->peerUser(
				user_id : -3286602200077108300,
			),
			max_id : 58,
			still_unread_count : 48,
			pts : 56,
			pts_count : 10,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -7419283859707900324,
			),
			max_id : 35,
			pts : 67,
			pts_count : 90,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1230382074051605936,
				url : 'https://docs.liveproto.dev',
			),
			pts : 75,
			pts_count : 80,
		),
		$client->updateReadMessagesContents(
			messages : array(96),
			pts : 68,
			pts_count : 4,
			date : 90,
		),
		$client->updateChannelTooLong(
			channel_id : 8297931580735313890,
			pts : 74,
		),
		$client->updateChannel(
			channel_id : 8095697838787555404,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(...),
			),
			pts : 42,
			pts_count : 37,
		),
		$client->updateReadChannelInbox(
			folder_id : 73,
			channel_id : -3564779283012365955,
			max_id : 14,
			still_unread_count : 47,
			pts : 19,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 4857794162423754465,
			messages : array(27),
			pts : 59,
			pts_count : 52,
		),
		$client->updateChannelMessageViews(
			channel_id : -6547812878870450566,
			id : 37,
			views : 66,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -3354286245802647174,
			user_id : -7516924672317102061,
			is_admin : true,
			version : 51,
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
			order : array(113266288983684802),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -32906999393489662,
			user_id : 6132860894575176757,
			query : 'uCdlcY7VPWAg9iDZ',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'TtWo1qNLfV7PFhH5',
		),
		$client->updateBotInlineSend(
			user_id : 2663310942354343664,
			query : '7ksTGSLxa0QBEjgt',
			geo : $client->geoPointEmpty(),
			id : 'vGQe3gynmd51iuUM',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 12,
				id : 5983183340721269933,
				access_hash : 471590450142324072,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 33,
				peer_id : $client->peerUser(...),
			),
			pts : 23,
			pts_count : 43,
		),
		$client->updateBotCallbackQuery(
			query_id : 3517986921813691461,
			user_id : 6817502570420092863,
			peer : $client->peerUser(
				user_id : 2650733660975673762,
			),
			msg_id : 70,
			chat_instance : 2994630767457057854,
			data : '????LiveProto?Q??',
			game_short_name : 'oCcnbA7HQPDTmM0V',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(...),
			),
			pts : 100,
			pts_count : 19,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -7712246103399355361,
			user_id : -3312802325502867301,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 9,
				id : 6635162658551307158,
				access_hash : 823699088890299849,
			),
			chat_instance : 542498181583152313,
			data : '?' . "\0" . '3?uLiveProto	?,' . "\0" . '',
			game_short_name : 'e5mKPMoGQ3gzwFbh',
		),
		$client->updateReadChannelOutbox(
			channel_id : 1574687603009152598,
			max_id : 91,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 2845510441966898972,
			),
			top_msg_id : 26,
			saved_peer_id : $client->peerUser(
				user_id : -5518443755163703738,
			),
			draft : $client->draftMessageEmpty(
				date : 16,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -5001964461224931961,
			webpage : $client->webPageEmpty(
				id : 5098937736721708058,
				url : 'https://docs.liveproto.dev',
			),
			pts : 70,
			pts_count : 15,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 40,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 20,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 95,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'JTCq9aiDkAmghe5Y',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 2374655663986772097,
			data : $client->dataJSON(
				data : 'PRlOou4IHd7MDf0y',
			),
			timeout : 30,
		),
		$client->updateBotShippingQuery(
			query_id : 6584478183409039785,
			user_id : -4579490685155599246,
			payload : '?-?\'`LiveProto;?n?f',
			shipping_address : $client->postAddress(
				street_line1 : 'G9nC2AxOUaTs7VQJ',
				street_line2 : '3xCfHP7DNWoER0Tt',
				city : 'BR4065qor3IuVQdF',
				state : 'Lp3keXg9zFjqWtAs',
				country_iso2 : '3KOH9U1FE7nYoigN',
				post_code : 'OWm6K2jBfadpe8z4',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -2521570106985094844,
			user_id : -1507552534919559074,
			payload : '?????LiveProto?ɢ??',
			info : $client->paymentRequestedInfo(
				name : 'izlY25rRqdo6hMBV',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'YxV47WIzRFqoXZ9s',
			currency : 'NApEnH9vgw4txlXS',
			total_amount : -597246190131234361,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -1181405058118560974,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'DgaISirvNwZXjT2B',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'G8WaUlFLN7PVwOvT',
				from_version : 68,
				version : 60,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -9092412706294590707,
			top_msg_id : 11,
			saved_peer_id : $client->peerUser(
				user_id : 7058940486201242972,
			),
			messages : array(51),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -5660059231418109240,
			available_min_id : 66,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -660318828775990986,
			),
		),
		$client->updateMessagePoll(
			poll_id : 8063630042517282182,
			poll : $client->poll(
				id : -8885268646753355625,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 52,
				close_date : 69,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 3,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'LiUxOFusW5XmYPT2',
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
				user_id : 2230055783448348210,
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
				until_date : 6,
			),
			version : 48,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 25,
				),
			),
			pts : 38,
			pts_count : 23,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -8383466262294779838,
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
				geo_distance : 49,
				request_chat_title : 'RLOrUxmZopCN4PE9',
				request_chat_date : 24,
				business_bot_id : 4509251422416530646,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 3035898287964404536,
				registration_month : '2ONMqKPagvusJEwL',
				phone_country : '+1234567890',
				name_change_date : 5,
				photo_change_date : 10,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 25,
					distance : 17,
				),
				$client->peerSelfLocated(
					expires : 14,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -1025552436648709630,
			),
			messages : array(57),
			sent_messages : array(66),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -695216428323763848,
				access_hash : 7128953118438400859,
				slug : 'lzaUTigQN3cbOW26',
				title : 'pnVfbFLkQ6aHRDjm',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'e1c0VujtUIvTFkP8',
				installs_count : 73,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8548319828789948453,
			),
			msg_id : 27,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 1104600883690168826,
			peer : $client->peerUser(
				user_id : 3295138263539264360,
			),
			options : array(')D[ʒLiveProtoI?7?'),
			qts : 13,
		),
		$client->updateDialogFilter(
			id : 2,
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
				id : 89,
				title : $client->textWithEntities(...),
				emoticon : 'QYLudCJ9biehK0Po',
				color : 70,
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
			order : array(26),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 640983745955919131,
			data : 'D????LiveProtoN?Pİ',
		),
		$client->updateChannelMessageForwards(
			channel_id : 1961553824783836416,
			id : 67,
			forwards : 26,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -7720393888450073177,
			top_msg_id : 85,
			read_max_id : 56,
			broadcast_id : 5260452457983732074,
			broadcast_post : 57,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -4186475261395640844,
			top_msg_id : 71,
			read_max_id : 65,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 1118579613854370080,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 8444384699203735719,
			top_msg_id : 5,
			from_id : $client->peerUser(
				user_id : -5761045641970107413,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6587510647067153977,
			),
			messages : array(88),
			pts : 82,
			pts_count : 37,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -939083631636429847,
			messages : array(99),
			pts : 34,
			pts_count : 96,
		),
		$client->updateChat(
			chat_id : 3761583014304059442,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -13990445600618045,
				access_hash : -2739931828348854094,
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
					date : 32,
					active_date : 28,
					source : 40,
					volume : 80,
					about : 'CSVj9D87xTtOYw0b',
					raise_hand_rating : -4133379021290488515,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 75,
		),
		$client->updateGroupCall(
			chat_id : 1244439839344082371,
			call : $client->groupCallDiscarded(
				id : 5970156129391376347,
				access_hash : -772762853684995084,
				duration : 92,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -2954174946498715417,
			),
			ttl_period : 73,
		),
		$client->updateChatParticipant(
			chat_id : 1955813934317361657,
			date : 35,
			actor_id : -4782444471359898837,
			user_id : 4844899600193545913,
			prev_participant : $client->chatParticipant(
				user_id : -2441684678717015447,
				inviter_id : 7993169539223505282,
				date : 39,
			),
			new_participant : $client->chatParticipant(
				user_id : -5687340371130323767,
				inviter_id : 8904992522504366860,
				date : 54,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'Pt0i4br1BMkcVXSa',
				admin_id : 1825259474715725446,
				date : 81,
				start_date : 8,
				expire_date : 47,
				usage_limit : 35,
				usage : 23,
				requested : 58,
				subscription_expired : 48,
				title : 'T6SE72obsUXnr4Lk',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 30,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 156101876891943044,
			date : 36,
			actor_id : 3385512524873309413,
			user_id : 2565724365804881218,
			prev_participant : $client->channelParticipant(
				user_id : 43240200839170064,
				date : 66,
				subscription_until_date : 48,
			),
			new_participant : $client->channelParticipant(
				user_id : -3920039266916081881,
				date : 62,
				subscription_until_date : 59,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'F3dkhx78zqJSQijY',
				admin_id : 3751966231517559543,
				date : 25,
				start_date : 31,
				expire_date : 93,
				usage_limit : 9,
				usage : 62,
				requested : 17,
				subscription_expired : 41,
				title : 'V7h8NCpUwTqQubOK',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 46,
		),
		$client->updateBotStopped(
			user_id : -4326436845629051709,
			date : 91,
			stopped : false,
			qts : 27,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'XzCgLbuIN3YTm79P',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -337332845106439873,
			),
			bot_id : 2738536303899623916,
			commands : array(
				$client->botCommand(
					command : 'wlUuIxg5EMqc8KmV',
					description : 'ilPGukUJat9qY8Fb',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -946665055115578554,
			),
			requests_pending : 16,
			recent_requesters : array(7776841699052601822),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 1989499191568521401,
			),
			date : 70,
			user_id : 1513010427240451885,
			about : 'Hj4rKviZVJMpRAuX',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '1qrCjghLxe0T9dUK',
				admin_id : -6878782677220620396,
				date : 39,
				start_date : 86,
				expire_date : 8,
				usage_limit : 64,
				usage : 11,
				requested : 36,
				subscription_expired : 59,
				title : 'iJp40rFAd2bZUKwD',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 96,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -7100964758970217839,
			),
			msg_id : 60,
			top_msg_id : 2,
			saved_peer_id : $client->peerUser(
				user_id : -2813679852211769582,
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
			query_id : 2021072176203329171,
		),
		$client->updateBotMenuButton(
			bot_id : 4672991236955831944,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -100917835264586768,
			),
			msg_id : 77,
			transcription_id : -331478881489480773,
			text : 'oHFDkrtXZ6biyGcs',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 7192770257696956933,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 378908093452928462,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 4062154870664566241,
			),
			msg_id : 22,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 1,
					h : 18,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 64,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 3024531846199452085,
			topic_id : 16,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -8603747752635785721,
			order : array(21),
		),
		$client->updateUser(
			user_id : -3817531173179696061,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 689430782083140318,
			),
			story : $client->storyItemDeleted(
				id : 46,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 6322104804167302066,
			),
			max_id : 29,
		),
		$client->updateStoryID(
			id : 74,
			random_id : -5623919115947127598,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 82,
				cooldown_until_date : 12,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 1317888016632510542,
			),
			story_id : 43,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -2875623406023534309,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'k8hg1mRZQfLrtPa6',
				user_id : -7206219048836821468,
				giveaway_msg_id : 86,
				date : 62,
				expires : 65,
				used_gift_slug : '9pDaiguotZVwmjT8',
				multiplier : 9,
				stars : -1547910648103193586,
			),
			qts : 51,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -4453827357280137897,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1547430868640807542,
			),
			wallpaper : $client->wallPaper(
				id : 5497740853391939482,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 2794028928321002329,
				slug : 'd4LHunyDFX7rGEbg',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 8393026939476654161,
			),
			msg_id : 43,
			date : 22,
			actor : $client->peerUser(
				user_id : -1570723399295658162,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'S9kQTHyhncWdp18s',
				),
				$client->reactionCustomEmoji(
					document_id : 7086742451732977332,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'WiGdfKkPuSsDe4Mr',
				),
				$client->reactionCustomEmoji(
					document_id : 3635669814762413461,
				),
				$client->reactionPaid(),
			),
			qts : 100,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -502417128184127349,
			),
			msg_id : 2,
			date : 85,
			reactions : array(
				$client->reactionCount(
					chosen_order : 70,
					reaction : $client->reactionEmpty(...),
					count : 78,
				),
			),
			qts : 70,
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
					folder_id : 82,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 's56Fk1Cejud8EzJ4',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 4,
					shortcut : 'yBiflQ7NwJ26PzrT',
					top_message : 39,
					count : 35,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 44,
				shortcut : '6QYnMoWyf9P2mdJh',
				top_message : 82,
				count : 44,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 13,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 41,
			messages : array(8),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'FYZd4qbtg5koKP9w',
				user_id : -5364724589449792646,
				dc_id : 17,
				date : 22,
				rights : $client->businessBotRights(...),
			),
			qts : 43,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'd9NSLBteaEY6k0fr',
			message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(...),
			),
			qts : 82,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'PKNfI4twcgJ9Vmk5',
			message : $client->messageEmpty(
				id : 86,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(...),
			),
			qts : 16,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'LcGmiwzDf9dV71E6',
			peer : $client->peerUser(
				user_id : -6563005661666296424,
			),
			messages : array(27),
			qts : 6,
		),
		$client->updateNewStoryReaction(
			story_id : 76,
			peer : $client->peerUser(
				user_id : 4548670605311472664,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -4553549880088426629,
				nanos : 81,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -5756715184252514733,
			user_id : -2205204183108588374,
			connection_id : '8UKpBQCga2lYiz1w',
			message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -7476180555141672341,
			data : '??b^?LiveProto^moĲ',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 6876614581972674986,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 67,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 3738424336373540709,
			payload : 'csYdPgbz1hCVAR75',
			qts : 25,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 54,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -5864135991014295760,
				access_hash : -4608150868821537708,
			),
			sub_chain_id : 75,
			blocks : array('e?1BLiveProto??&??'),
			next_offset : 95,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -5844144657375247501,
			saved_peer_id : $client->peerUser(
				user_id : 7569039802805004144,
			),
			read_max_id : 43,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -8044182593424382334,
			saved_peer_id : $client->peerUser(
				user_id : -4825958465568083614,
			),
			read_max_id : 93,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -8386628808437912103,
			saved_peer_id : $client->peerUser(
				user_id : 6953285895958707977,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 7747785233530301117,
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
			id : -1544449000205746849,
			access_hash : -3511144062401385543,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'O2VQrH9PuYZy4ejN',
					reason : 'xIyOYNCvd1lRkbVp',
					text : '7j0bpz9Y1Zgdam2C',
				),
			),
			bot_inline_placeholder : 'MBqA3SZQ8sklFOaw',
			lang_code : 'v9a1LKwPXktmiVxN',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 36,
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 260981594417421268,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : -7234751332913670715,
			),
			bot_active_users : 37,
			bot_verification_icon : -1074685405980492353,
			send_paid_messages_stars : 5894919191658442407,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6763862602971512724,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8316065253191627545,
			title : 'dkYBIulW4DHwQ9V7',
			photo : $client->chatPhotoEmpty(),
			participants_count : 65,
			date : 29,
			version : 50,
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
				until_date : 27,
			),
		),
		$client->chatForbidden(
			id : -2637514533056696257,
			title : 'x2YC7onrjPd16Hli',
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
			id : 6066204007628564576,
			access_hash : -1322871978170863821,
			title : 'caOUMGtfWLuSRTo2',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OBokSrzmATCJ5pli',
					reason : 'gFnceJRD3BofjuPI',
					text : 'yAsK6lOSVD8YnQrz',
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
				until_date : 6,
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
				until_date : 37,
			),
			participants_count : 58,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 0,
			color : $client->peerColor(
				color : 8,
				background_emoji_id : -6597784863830350751,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : -1862312344533869258,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 68,
			subscription_until_date : 61,
			bot_verification_icon : -7677714421699586152,
			send_paid_messages_stars : 1429519850096972323,
			linked_monoforum_id : -8821858106665585678,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2334956613271821953,
			access_hash : -8082374769717647681,
			title : 'as0wkQn3jAvNxh7S',
			until_date : 92,
		),
	),
	date : 88,
	seq_start : 80,
	seq : 35,
);
```