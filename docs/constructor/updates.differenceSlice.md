# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 211

```tl
updates.differenceSlice#a8fb1981 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> intermediate_state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | New messages from the encrypted event sequence |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>intermediate_state</mark> | [`updates.State`](type/updates.State) | Intermediary state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceSlice(
	new_messages : array(
		$client->messageEmpty(
			id : 5,
			peer_id : $client->peerUser(
				user_id : -8525171872206607554,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 47,
			from_id : $client->peerUser(
				user_id : -5713631698405078152,
			),
			from_boosts_applied : 83,
			peer_id : $client->peerUser(
				user_id : -1546250973878330628,
			),
			saved_peer_id : $client->peerUser(
				user_id : -8559671745846588115,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'TalAMb42Bc6tRUxP',
				date : 4,
				channel_post : 51,
				post_author : 'VtiwSRzWILAsF3qN',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 43,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'NjAWmcdKZoI4JnhH',
				saved_date : 51,
				psa_type : 'T1GJ57mWt4o96Cec',
			),
			via_bot_id : -2522127060451567595,
			via_business_bot_id : 105900282629062459,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 9,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 21,
				quote_text : 'o9iS56nKtHCqyNhY',
				quote_entities : array(
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
				quote_offset : 14,
				todo_item_id : 91,
			),
			date : 52,
			message : 'bKM6nTazh0wxP7Fu',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 76,
				),
				$client->messageEntityMention(
					offset : 61,
					length : 7,
				),
				$client->messageEntityHashtag(
					offset : 50,
					length : 50,
				),
				$client->messageEntityBotCommand(
					offset : 19,
					length : 77,
				),
				$client->messageEntityUrl(
					offset : 24,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 29,
					length : 49,
				),
				$client->messageEntityBold(
					offset : 23,
					length : 94,
				),
				$client->messageEntityItalic(
					offset : 35,
					length : 48,
				),
				$client->messageEntityCode(
					offset : 92,
					length : 27,
				),
				$client->messageEntityPre(
					offset : 89,
					length : 41,
					language : 'du1yxFYrvc49ZHXS',
				),
				$client->messageEntityTextUrl(
					offset : 72,
					length : 52,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 33,
					length : 85,
					user_id : 1321816042162545940,
				),
				$client->inputMessageEntityMentionName(
					offset : 50,
					length : 28,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 20,
					length : 2,
				),
				$client->messageEntityCashtag(
					offset : 20,
					length : 49,
				),
				$client->messageEntityUnderline(
					offset : 88,
					length : 73,
				),
				$client->messageEntityStrike(
					offset : 87,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 53,
					length : 2,
				),
				$client->messageEntitySpoiler(
					offset : 5,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 9,
					length : 48,
					document_id : -3408355018574035235,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 44,
					length : 0,
				),
			),
			views : 3,
			forwards : 48,
			replies : $client->messageReplies(
				comments : true,
				replies : 52,
				replies_pts : 85,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : -7977480567578857770,
				max_id : 96,
				read_max_id : 70,
			),
			edit_date : 26,
			post_author : '2Im5tTRxq0o4Ag1Q',
			grouped_id : -2096887761897529419,
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
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'p3Rx602OHbn9umVl',
					reason : 'eTsJD2URlIVq70x8',
					text : 'yW95gvBqMsmEFfV7',
				),
			),
			ttl_period : 64,
			quick_reply_shortcut_id : 36,
			effect : 1492041619078232088,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'bJTuNsjiQ8GUBa7w',
				text : $client->textWithEntities(...),
				hash : 7574959768256562171,
			),
			report_delivery_until_date : 53,
			paid_message_stars : -5672469436364517909,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 43,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 96,
			from_id : $client->peerUser(
				user_id : 8147784231189443461,
			),
			peer_id : $client->peerUser(
				user_id : -6326581950024014259,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3268905082225917823,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 72,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 37,
				quote_text : 'WF7wrjBpPIxSNyc6',
				quote_entities : array(
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
				quote_offset : 97,
				todo_item_id : 85,
			),
			date : 97,
			action : $client->messageActionEmpty(),
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
			ttl_period : 35,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : 6069073021550835708,
			chat_id : 52,
			date : 80,
			bytes : '??i?\\LiveProto?NG<?',
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 1949463454141925862,
			chat_id : 53,
			date : 90,
			bytes : '??f??LiveProto?*?5',
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(...),
			),
			pts : 52,
			pts_count : 27,
		),
		$client->updateMessageID(
			id : 88,
			random_id : 5175691691202146964,
		),
		$client->updateDeleteMessages(
			messages : array(52),
			pts : 13,
			pts_count : 50,
		),
		$client->updateUserTyping(
			user_id : -868974669135525404,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -7234085174238247143,
			from_id : $client->peerUser(
				user_id : 3320497751232789113,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -4611534300474496910,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -1389565448010100014,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -6183103137079837129,
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
			hash : -47852583962745025,
			date : 79,
			device : 'U4WaGw5n1I0fyECV',
			location : 'OZ9lyz3twH4DmiMd',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 6613387717041113360,
				chat_id : 66,
				date : 5,
				bytes : 'P?JLiveProto???M@',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 94,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 63,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 89,
			),
			date : 24,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 69,
			max_date : 39,
			date : 40,
		),
		$client->updateChatParticipantAdd(
			chat_id : 6598315590438662959,
			user_id : 2519726429125246616,
			inviter_id : 4488297288128896374,
			date : 14,
			version : 32,
		),
		$client->updateChatParticipantDelete(
			chat_id : 8345913216763383607,
			user_id : 3456607744973209031,
			version : 58,
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
					id : 48,
					ip_address : '127.0.0.1',
					port : 20,
					secret : 'U?4?LiveProto?5F`',
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
				mute_until : 72,
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
			inbox_date : 42,
			type : 'vKujXQWEJUYS2Mmx',
			message : 'bsfPkn57ONCQ3ELM',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 53,
					length : 52,
				),
				$client->messageEntityMention(
					offset : 98,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 87,
					length : 52,
				),
				$client->messageEntityBotCommand(
					offset : 90,
					length : 84,
				),
				$client->messageEntityUrl(
					offset : 90,
					length : 61,
				),
				$client->messageEntityEmail(
					offset : 54,
					length : 88,
				),
				$client->messageEntityBold(
					offset : 47,
					length : 40,
				),
				$client->messageEntityItalic(
					offset : 42,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 78,
					length : 8,
				),
				$client->messageEntityPre(
					offset : 29,
					length : 97,
					language : 'VOSuzNqev0RtnULK',
				),
				$client->messageEntityTextUrl(
					offset : 64,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 38,
					length : 38,
					user_id : 5687305517621937815,
				),
				$client->inputMessageEntityMentionName(
					offset : 40,
					length : 83,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 1,
					length : 83,
				),
				$client->messageEntityCashtag(
					offset : 32,
					length : 65,
				),
				$client->messageEntityUnderline(
					offset : 13,
					length : 30,
				),
				$client->messageEntityStrike(
					offset : 52,
					length : 14,
				),
				$client->messageEntityBankCard(
					offset : 59,
					length : 43,
				),
				$client->messageEntitySpoiler(
					offset : 9,
					length : 12,
				),
				$client->messageEntityCustomEmoji(
					offset : 83,
					length : 18,
					document_id : 2322476539025865360,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 74,
					length : 36,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(742691204172877914),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-8784517068762854083),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(99436902971011805),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-3748505787652168576),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 7745133424468439039,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 54,
			peer : $client->peerUser(
				user_id : -4338384208658795857,
			),
			max_id : 74,
			still_unread_count : 78,
			pts : 88,
			pts_count : 80,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -5483587206326195657,
			),
			max_id : 36,
			pts : 18,
			pts_count : 94,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -4181343517564244796,
				url : 'https://docs.liveproto.dev',
			),
			pts : 84,
			pts_count : 25,
		),
		$client->updateReadMessagesContents(
			messages : array(60),
			pts : 15,
			pts_count : 90,
			date : 84,
		),
		$client->updateChannelTooLong(
			channel_id : -229821458982639966,
			pts : 83,
		),
		$client->updateChannel(
			channel_id : -6589387176672430847,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 72,
				peer_id : $client->peerUser(...),
			),
			pts : 12,
			pts_count : 56,
		),
		$client->updateReadChannelInbox(
			folder_id : 15,
			channel_id : -282085690510870091,
			max_id : 94,
			still_unread_count : 63,
			pts : 96,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 8514479721246606522,
			messages : array(85),
			pts : 71,
			pts_count : 17,
		),
		$client->updateChannelMessageViews(
			channel_id : -2878565848571218443,
			id : 59,
			views : 31,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -3623194657166085790,
			user_id : -5890104186794832920,
			is_admin : $client->boolFalse(),
			version : 78,
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
			order : array(1207088283150136270),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 1925850661407679578,
			user_id : 6858184054136782173,
			query : 'vzNS05Bwo1IOHrMm',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'AFgdC05OmeuXD9cs',
		),
		$client->updateBotInlineSend(
			user_id : 279959390391765851,
			query : 'R4VJFEjemduDac72',
			geo : $client->geoPointEmpty(),
			id : 'klPxR4LeA8yIZC13',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 57,
				id : 7154569257441007514,
				access_hash : 7707386876587821526,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 62,
				peer_id : $client->peerUser(...),
			),
			pts : 8,
			pts_count : 55,
		),
		$client->updateBotCallbackQuery(
			query_id : 3126202518630191421,
			user_id : -3560362783170069332,
			peer : $client->peerUser(
				user_id : -2618569065109551563,
			),
			msg_id : 70,
			chat_instance : 7987911938574757727,
			data : '??$LiveProto^?l?',
			game_short_name : 'TDMokNYUI7htVCbd',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 13,
				peer_id : $client->peerUser(...),
			),
			pts : 15,
			pts_count : 9,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -59237615631113,
			user_id : 4654247380667251579,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 56,
				id : 1716254909673042593,
				access_hash : -8615642371133606022,
			),
			chat_instance : 5475020693958341452,
			data : 'e??8?LiveProto?e?j',
			game_short_name : 'dT4Qn7s3XeHxYAI6',
		),
		$client->updateReadChannelOutbox(
			channel_id : 6291445725842434166,
			max_id : 82,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 7663319727837842676,
			),
			top_msg_id : 4,
			saved_peer_id : $client->peerUser(
				user_id : 7279478656195666431,
			),
			draft : $client->draftMessageEmpty(
				date : 58,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -6242590990353214784,
			webpage : $client->webPageEmpty(
				id : -1444614216185049748,
				url : 'https://docs.liveproto.dev',
			),
			pts : 98,
			pts_count : 3,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 51,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 80,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 14,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'KL0ipoCFVA4gyhkc',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 4061049491591950985,
			data : $client->dataJSON(
				data : 'YczWKZUJHGILEV3u',
			),
			timeout : 60,
		),
		$client->updateBotShippingQuery(
			query_id : -8532436440789867196,
			user_id : 5346607479774396724,
			payload : 'J?nV?LiveProto|,?7^',
			shipping_address : $client->postAddress(
				street_line1 : 'WqRFhC9QeXzx845P',
				street_line2 : 'Jmye9QvtR0F4XPHL',
				city : 'uwzsXIHOWNvy86og',
				state : 'vziCfl2XehxpPIy5',
				country_iso2 : 'tVEoqMyJPNdXfgpT',
				post_code : 'Ybu5PJmldtDr1KGn',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 87582126094077622,
			user_id : 7011883715962541518,
			payload : '' . "\0" . 'sB?QLiveProto?Ǭ?',
			info : $client->paymentRequestedInfo(
				name : 'jAPu4wo5SriFsQYG',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'L2bmvIZG3SjNMhnu',
			currency : 'zXMqp7kUoT43xQjO',
			total_amount : -6712811484669305314,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 4577846768423379092,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'Tdb7ZE8p9cx40ozA',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '8QnTbIGiEMHCjrav',
				from_version : 16,
				version : 45,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -2727431383967272113,
			top_msg_id : 55,
			saved_peer_id : $client->peerUser(
				user_id : -2205803770294258291,
			),
			messages : array(80),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -2218398503808304453,
			available_min_id : 85,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -7059649078914580060,
			),
		),
		$client->updateMessagePoll(
			poll_id : 4654859119555680353,
			poll : $client->poll(
				id : -4036229228055524330,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 7,
				close_date : 18,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 34,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'p4DZlS21rqostWwa',
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
				user_id : 4810292207240238938,
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
				until_date : 8,
			),
			version : 78,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 83,
				),
			),
			pts : 62,
			pts_count : 21,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 4260163827841072808,
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
				geo_distance : 69,
				request_chat_title : '8GuHXakUF5TWDvfI',
				request_chat_date : 52,
				business_bot_id : 94633365495207730,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 2892849084278279184,
				registration_month : 'YrF4GhLjKymoWPB6',
				phone_country : '+1234567890',
				name_change_date : 60,
				photo_change_date : 1,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 46,
					distance : 34,
				),
				$client->peerSelfLocated(
					expires : 95,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 3670135874388203365,
			),
			messages : array(23),
			sent_messages : array(38),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -1046113915255863499,
				access_hash : -4947124013700791725,
				slug : 'd6R5WwZ3cJGzIP9H',
				title : 'E6x4nDMeIfJUZ5oj',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : '1oUnmMK2tjLHN7qZ',
				installs_count : 91,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -2938339408938983607,
			),
			msg_id : 47,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -3248702005013524713,
			peer : $client->peerUser(
				user_id : 7613688305711863906,
			),
			options : array('MLF?LiveProtoۛ`i?'),
			qts : 17,
		),
		$client->updateDialogFilter(
			id : 81,
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
				id : 96,
				title : $client->textWithEntities(...),
				emoticon : 'c1R6qbOXIFLjyEZr',
				color : 74,
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
			order : array(12),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -8578079645387735934,
			data : 'V??gLiveProto@?֍?',
		),
		$client->updateChannelMessageForwards(
			channel_id : -8296366913866358034,
			id : 7,
			forwards : 16,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -6748604713082786174,
			top_msg_id : 14,
			read_max_id : 40,
			broadcast_id : 3992807875269327785,
			broadcast_post : 74,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 3906143059346427575,
			top_msg_id : 56,
			read_max_id : 92,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 4783153422336984607,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -5877456398403628320,
			top_msg_id : 0,
			from_id : $client->peerUser(
				user_id : 1500794891014472563,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6495067075757888769,
			),
			messages : array(15),
			pts : 61,
			pts_count : 33,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -8342372475012462544,
			messages : array(79),
			pts : 5,
			pts_count : 46,
		),
		$client->updateChat(
			chat_id : 1174688973858116705,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -5197487694664851240,
				access_hash : 6746595639190648360,
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
					date : 5,
					active_date : 64,
					source : 11,
					volume : 4,
					about : 'M2TgDsjV4BXhbUJf',
					raise_hand_rating : -2154489373650641265,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 8,
		),
		$client->updateGroupCall(
			chat_id : 3710546784169617665,
			call : $client->groupCallDiscarded(
				id : 8546786133860218021,
				access_hash : -7595954591466543700,
				duration : 33,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -1196051370176462771,
			),
			ttl_period : 27,
		),
		$client->updateChatParticipant(
			chat_id : 5712446953155867426,
			date : 12,
			actor_id : 8655169178846877921,
			user_id : 6951642552544758833,
			prev_participant : $client->chatParticipant(
				user_id : -2151723170732616662,
				inviter_id : 4411314702078741371,
				date : 66,
			),
			new_participant : $client->chatParticipant(
				user_id : 1715842457705266281,
				inviter_id : 3727534938564417290,
				date : 81,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'hszMqofL05ygFCAj',
				admin_id : -8215671884901898631,
				date : 64,
				start_date : 92,
				expire_date : 67,
				usage_limit : 34,
				usage : 64,
				requested : 21,
				subscription_expired : 43,
				title : '5HKczuPfQVsDJNF1',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 89,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2180440977087713314,
			date : 94,
			actor_id : 6218726281528539523,
			user_id : 8695237897621694946,
			prev_participant : $client->channelParticipant(
				user_id : -563330115849673434,
				date : 57,
				subscription_until_date : 20,
			),
			new_participant : $client->channelParticipant(
				user_id : -9208301916369319792,
				date : 90,
				subscription_until_date : 50,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '2StgPEB6VoHxn1WX',
				admin_id : -561630101773744223,
				date : 80,
				start_date : 1,
				expire_date : 90,
				usage_limit : 49,
				usage : 5,
				requested : 63,
				subscription_expired : 69,
				title : 'qr0yWkec9xUFJKH5',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 74,
		),
		$client->updateBotStopped(
			user_id : 1239686921970359214,
			date : 64,
			stopped : $client->boolFalse(),
			qts : 4,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'RJeEc6vld9M1tFzD',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -4619837471457884928,
			),
			bot_id : -8849563854206731214,
			commands : array(
				$client->botCommand(
					command : 'AxNBgKrP0cln6GWR',
					description : '43zO2PIJMEZe6sqC',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -1452564112522212572,
			),
			requests_pending : 3,
			recent_requesters : array(-4327276986394558221),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -7121484526006129658,
			),
			date : 31,
			user_id : -7051225168707420940,
			about : 'kXZTesH3m5dlVDMW',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'E9TXSsuGOFtQeqyP',
				admin_id : 2243875498901321576,
				date : 71,
				start_date : 55,
				expire_date : 39,
				usage_limit : 99,
				usage : 68,
				requested : 34,
				subscription_expired : 64,
				title : 'Fc1EIGgC3RXdO09K',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 67,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 452704991516532009,
			),
			msg_id : 50,
			top_msg_id : 25,
			saved_peer_id : $client->peerUser(
				user_id : 1691897747200841416,
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
			query_id : -2573368347013558509,
		),
		$client->updateBotMenuButton(
			bot_id : 925881466375877626,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 3365646182172182978,
			),
			msg_id : 48,
			transcription_id : -4647551356623324512,
			text : '2n9vhYcVo5pdaksB',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -6770820254111681776,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 8153823829300359125,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -3802395033090345606,
			),
			msg_id : 95,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 19,
					h : 84,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 41,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -1164245385822026210,
			topic_id : 74,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -9161378008504099328,
			order : array(18),
		),
		$client->updateUser(
			user_id : 6491568922615281262,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -6107632001932757815,
			),
			story : $client->storyItemDeleted(
				id : 45,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 7322847693539694654,
			),
			max_id : 98,
		),
		$client->updateStoryID(
			id : 74,
			random_id : 7591560060805498949,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 17,
				cooldown_until_date : 20,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 5686671235010296327,
			),
			story_id : 89,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 534821337594523349,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'zMlC9DpgxOy52jqb',
				user_id : -5437967485283108302,
				giveaway_msg_id : 83,
				date : 87,
				expires : 20,
				used_gift_slug : 'fVojZT3bgSrdFXvL',
				multiplier : 22,
				stars : -2263313610385189992,
			),
			qts : 100,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 5692915380895115966,
			enabled : $client->boolFalse(),
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 5879335041466932234,
			),
			wallpaper : $client->wallPaper(
				id : -3910124752263640778,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -4225528312327796845,
				slug : 'OTEgcKwNtLFnaUb2',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 1152235689177186378,
			),
			msg_id : 66,
			date : 68,
			actor : $client->peerUser(
				user_id : 8446354861987540376,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'AnHYTG6C9c0moUre',
				),
				$client->reactionCustomEmoji(
					document_id : 9322342180329453,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'QdAOlfqeixhnJFa0',
				),
				$client->reactionCustomEmoji(
					document_id : 8095844219654443676,
				),
				$client->reactionPaid(),
			),
			qts : 63,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 2035575911741576037,
			),
			msg_id : 59,
			date : 0,
			reactions : array(
				$client->reactionCount(
					chosen_order : 38,
					reaction : $client->reactionEmpty(...),
					count : 58,
				),
			),
			qts : 38,
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
					folder_id : 97,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'r6k3bDG9FKgcwaBh',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 52,
					shortcut : 'WLtToSKHrAwnI4fs',
					top_message : 80,
					count : 78,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 0,
				shortcut : 'JnHyMXsrTU0utaNd',
				top_message : 10,
				count : 4,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 23,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 71,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 82,
			messages : array(7),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'O9QTrHAXfYgZilsd',
				user_id : -2421487979710516452,
				dc_id : 88,
				date : 12,
				rights : $client->businessBotRights(...),
			),
			qts : 25,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'Ap7WXhwGs1JUrgDa',
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 8,
				peer_id : $client->peerUser(...),
			),
			qts : 73,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'gFdhaNvYAnE1sClb',
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 56,
				peer_id : $client->peerUser(...),
			),
			qts : 54,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'v8fEj1WBPiHtbyUm',
			peer : $client->peerUser(
				user_id : -5018130936639424404,
			),
			messages : array(66),
			qts : 36,
		),
		$client->updateNewStoryReaction(
			story_id : 5,
			peer : $client->peerUser(
				user_id : 5160726535902277432,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -4716700621482769497,
				nanos : 89,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 7484115164648223266,
			user_id : -3337847122644372984,
			connection_id : 'v79fxoibjcaNZuM8',
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -7382145707177460728,
			data : '?t??LiveProto???!?',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -2206336861742468744,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 49,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 1357260852579911087,
			payload : '8nUYASQywXpKvBFk',
			qts : 71,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 18,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -446535853888115712,
				access_hash : 3248682899740518665,
			),
			sub_chain_id : 16,
			blocks : array('?Ͷ??LiveProtoӬ?'),
			next_offset : 98,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -8402027503056061695,
			saved_peer_id : $client->peerUser(
				user_id : 7089749376713401179,
			),
			read_max_id : 53,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 1591311139068841715,
			saved_peer_id : $client->peerUser(
				user_id : -6442143855394346463,
			),
			read_max_id : 56,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -4982569418179450144,
			saved_peer_id : $client->peerUser(
				user_id : -4527931912048388178,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 467530388742746676,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6469769619863667846,
			title : '43ayhUMbNAozExud',
			photo : $client->chatPhotoEmpty(),
			participants_count : 45,
			date : 73,
			version : 16,
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
				until_date : 77,
			),
		),
		$client->chatForbidden(
			id : 3180380032601690181,
			title : 'CbfvajHBonK9xZVk',
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
			id : 5059227311656299748,
			access_hash : 5880537211308279464,
			title : '7LnG3xIQhPkHe14o',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'V2JzQdWlt94iCuys',
					reason : 'gRloGZY5zn8OL6BT',
					text : 'agMzD90CK4WIdO8m',
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
				until_date : 18,
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
				until_date : 25,
			),
			participants_count : 99,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 4,
			color : $client->peerColor(
				color : 24,
				background_emoji_id : 7354795884459529025,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 5994637609798627600,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 4,
			subscription_until_date : 91,
			bot_verification_icon : -6515655994933103806,
			send_paid_messages_stars : -355221336498109380,
			linked_monoforum_id : -4463389132089296133,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1858930060831750208,
			access_hash : 8098730418129507089,
			title : 'hQx7YsL61nftTgH9',
			until_date : 97,
		),
	),
	users : array(
		$client->userEmpty(
			id : -994024699289882329,
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
			id : -2368488078354485103,
			access_hash : -5545732507874094677,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qHg5cmxl96eYbdSa',
					reason : '51TlHxeR8QF9raCV',
					text : 'Suc2nt7qxrfvwP5N',
				),
			),
			bot_inline_placeholder : 'S2fAXHpRlLmcTJ1q',
			lang_code : '6CLebtTUlvKGP9Xi',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 3,
			color : $client->peerColor(
				color : 33,
				background_emoji_id : 6113711471372221282,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -8659585571525477394,
			),
			bot_active_users : 100,
			bot_verification_icon : -5170109180356869790,
			send_paid_messages_stars : -2585984605201451662,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 40,
		qts : 24,
		date : 7,
		seq : 33,
		unread_count : 34,
	),
);
```