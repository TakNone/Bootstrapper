# updates

**Description** : *Full constructor of updates*

**Layer** : 218

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : -4741545362900859679,
				),
			),
			pts : 78,
			pts_count : 2,
		),
		$client->updateMessageID(
			id : 21,
			random_id : -2771435372881735796,
		),
		$client->updateDeleteMessages(
			messages : array(39),
			pts : 71,
			pts_count : 2,
		),
		$client->updateUserTyping(
			user_id : -6322663227075343102,
			top_msg_id : 81,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 4933248678460648110,
			from_id : $client->peerUser(
				user_id : -9073984052998716975,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 8536134359182070249,
				self_participant : $client->chatParticipant(
					user_id : -6000872091480089237,
					inviter_id : -1035375988035254094,
					date : 93,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 5997530050928728413,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 5904272616576064839,
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
			hash : 0,
			date : 14,
			device : 'o2GzsIhgdjUKmLb1',
			location : 'UBDs4WwZh076CPrK',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -663180621576440597,
				chat_id : 23,
				date : 84,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 70,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 11,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 29,
			),
			date : 93,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 66,
			max_date : 68,
			date : 51,
		),
		$client->updateChatParticipantAdd(
			chat_id : -1239040574520999674,
			user_id : 5329003293336619438,
			inviter_id : -3564818737402069753,
			date : 53,
			version : 44,
		),
		$client->updateChatParticipantDelete(
			chat_id : 8266489322966848495,
			user_id : -8677481965214937212,
			version : 45,
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
					id : 90,
					ip_address : '127.0.0.1',
					port : 11,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 8290670558810657949,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 77,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 7,
			type : 'kt3cSKRhQyBLZ85q',
			message : 'obFm3n4f5aTEAgOv',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 80,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 97,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 91,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 22,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 22,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 98,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 47,
					language : 'uJqkgKX4yTeM10Nr',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 9,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : -6432369052307932991,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 82,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 73,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : 1116456472364119654,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 69,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-9180357335435787315),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-8482902022357873874),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(7789074033747195523),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-2523401206173078962),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 2640184494624716535,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 65,
			peer : $client->peerUser(
				user_id : 5018307958942694875,
			),
			top_msg_id : 78,
			max_id : 22,
			still_unread_count : 6,
			pts : 8,
			pts_count : 83,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -2592124787613806958,
			),
			max_id : 48,
			pts : 11,
			pts_count : 64,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7074088747595355613,
				url : 'https://docs.liveproto.dev',
			),
			pts : 44,
			pts_count : 69,
		),
		$client->updateReadMessagesContents(
			messages : array(6),
			pts : 75,
			pts_count : 57,
			date : 24,
		),
		$client->updateChannelTooLong(
			channel_id : -1920484240200891798,
			pts : 74,
		),
		$client->updateChannel(
			channel_id : 93744286035592138,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(
					user_id : -7223316977825511755,
				),
			),
			pts : 23,
			pts_count : 13,
		),
		$client->updateReadChannelInbox(
			folder_id : 42,
			channel_id : -4255912485923042802,
			max_id : 79,
			still_unread_count : 8,
			pts : 49,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -8894901062981336306,
			messages : array(68),
			pts : 95,
			pts_count : 31,
		),
		$client->updateChannelMessageViews(
			channel_id : 8554528476325419205,
			id : 1,
			views : 83,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -3214704087275943704,
			user_id : 5329977275302705089,
			is_admin : true,
			version : 4,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 4,
					id : 622284075025483638,
					access_hash : -8901837918636090973,
					title : 'tLxa7g5fTKYeQ3Or',
					short_name : 'VRdyHtjKGcDqoEBX',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 91,
					thumb_version : 43,
					thumb_document_id : 8480398930291523307,
					count : 92,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'DNHyItWQdArw45hV',
						documents : array(-6905121575920742781),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -9625114587392136,
						keyword : array('b6ZJU1lT9qcoysCe'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -315089185820197081,
					),
					$client->document(
						id : 7412740023524788000,
						access_hash : -3331721837932901469,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 89,
						mime_type : '6jx1LAH2h8eZTvtV',
						size : 1196702109124679028,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 80,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(1187536512503317227),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -9102930348416296872,
			user_id : -6179439537703611861,
			query : 'BPbhQNoq7rmAwzyX',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'eNPvBLS0Z4DokaqK',
		),
		$client->updateBotInlineSend(
			user_id : 2816051706085803719,
			query : 'Pa8btsiyHNkwL7hQ',
			geo : $client->geoPointEmpty(),
			id : 'UpQEGqwzIaA7nWtF',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 7,
				id : 2492556138395061515,
				access_hash : 8763217836652763610,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 5,
				peer_id : $client->peerUser(
					user_id : -3051976031190172471,
				),
			),
			pts : 89,
			pts_count : 4,
		),
		$client->updateBotCallbackQuery(
			query_id : -6702798434233330952,
			user_id : 2919913868232091133,
			peer : $client->peerUser(
				user_id : 4857539416640101058,
			),
			msg_id : 59,
			chat_instance : -5080159646471746122,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'e6OJl4SRYrVP3pnK',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 72,
				peer_id : $client->peerUser(
					user_id : 6836102047126607016,
				),
			),
			pts : 85,
			pts_count : 20,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 3368259314365961521,
			user_id : 4381535217372989963,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 67,
				id : 2692764704865175768,
				access_hash : 1169105480536471650,
			),
			chat_instance : -4009473378795334512,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '4QhMg7lAbXpfdNVm',
		),
		$client->updateReadChannelOutbox(
			channel_id : 2142766062708021066,
			max_id : 12,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -2764471082029415346,
			),
			top_msg_id : 80,
			saved_peer_id : $client->peerUser(
				user_id : 775279944395436630,
			),
			draft : $client->draftMessageEmpty(
				date : 3,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 8478227113921047349,
			webpage : $client->webPageEmpty(
				id : -8823921520465297739,
				url : 'https://docs.liveproto.dev',
			),
			pts : 43,
			pts_count : 50,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 84,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4187515406461202332,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 89,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -3365719211079507347,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 22,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'rdzyR27YCgJwaeTs',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 1798932533024419312,
			data : $client->dataJSON(
				data : 'EmZDMR06wkGgHazp',
			),
			timeout : 2,
		),
		$client->updateBotShippingQuery(
			query_id : -7477401705083296143,
			user_id : 7439354094216982257,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'u6fcy0GD4NX23UWa',
				street_line2 : 'L9iyAdQJHBZ1EhtM',
				city : 'A1zGn87C4ytDclPj',
				state : 'J0Tgn2KqdQYCrXkA',
				country_iso2 : 'dr2pgAajFKyW6Beo',
				post_code : 'xyoQ8nG2XTdH3L6C',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -3105331041720771268,
			user_id : -6716974765257202979,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'skGYMUh6gdZftxuL',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'puvEhf03rbkeIcUz',
					street_line2 : 'Yg2ieBEGOm1PUVZd',
					city : 'm9JAT7tZxqhDRjHu',
					state : 'efMVsONTGE2IB0Um',
					country_iso2 : 'kFU0a5txB7ITd1wH',
					post_code : 'ZqCHzajXAuiNVwYm',
				),
			),
			shipping_option_id : 'rsBKYF1xLaeTvdCp',
			currency : 'T14lSoRm2yruBPHb',
			total_amount : -8950861241836615547,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 5933606082465307245,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'QTfIL3gpmDH80aK2',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '7QMDoUNme4xOhvIR',
				from_version : 39,
				version : 80,
				strings : array(
					$client->langPackString(
						key : 'L1rMhGuKjWwJUxRn',
						value : 'dho0S3lWsGF8YMRA',
					),
					$client->langPackStringPluralized(
						key : 'HBr6zVQAcJsmDYEO',
						zero_value : '7MUGlZoBSWADzt2d',
						one_value : 'F6TMheaSPqn4dux2',
						two_value : '3UkzL6VcMW2ZwExK',
						few_value : 'CNg85SA12elsrX7q',
						many_value : 'BA1qGx9wodLpbjie',
						other_value : 'rcLqvFxHDbYX5RuM',
					),
					$client->langPackStringDeleted(
						key : 'v2wWOG9NEl3LSCM8',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7062487939258593730,
			top_msg_id : 99,
			saved_peer_id : $client->peerUser(
				user_id : -6436676937616500417,
			),
			messages : array(35),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -3458813420691443838,
			available_min_id : 13,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -8632082591428917139,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 2803054471935911687,
			),
		),
		$client->updateMessagePoll(
			poll_id : -5888197355885098413,
			poll : $client->poll(
				id : 5639132044414655296,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'OrYXFAfysoeGC1LB',
					entities : array(
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 63,
				close_date : 34,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 86,
					),
				),
				total_voters : 90,
				recent_voters : array(
					$client->peerUser(
						user_id : 8277523795821464208,
					),
					$client->peerChat(
						chat_id : 3585191388122784585,
					),
					$client->peerChannel(
						channel_id : 435127205287177958,
					),
				),
				solution : 'gl9XMvNyG2BKqfJo',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 4,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 82,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 2,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 22,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 48,
						language : 'ePfUc3vE8LyOMgZR',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 9,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 42,
						user_id : 3024403861260397835,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 23,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 65,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 95,
						document_id : 9110430997576134787,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 19,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 6399160131692828739,
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
				until_date : 5,
			),
			version : 68,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 9209294314654257369,
					),
					folder_id : 20,
				),
			),
			pts : 10,
			pts_count : 23,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 1916154310695147395,
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
				geo_distance : 45,
				request_chat_title : 'VzyLo5M1Z6DIfAXl',
				request_chat_date : 96,
				business_bot_id : 1802939429540443915,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -6670038352766168464,
				registration_month : 'j4ofR2NVFEP8nDMX',
				phone_country : '+1234567890',
				name_change_date : 80,
				photo_change_date : 66,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -8198973187689735394,
					),
					expires : 76,
					distance : 66,
				),
				$client->peerSelfLocated(
					expires : 24,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(
					user_id : -5098550777141430073,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 2051771527276470880,
			),
			messages : array(10),
			sent_messages : array(29),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -6392542908258537770,
				access_hash : -2631412731114206845,
				slug : 'oiwkQfh27uTVJSjY',
				title : 'JOrfBx2gFYoV3iWT',
				document : $client->documentEmpty(
					id : -2656183606094575011,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 29,
						outbox_accent_color : 81,
						message_colors : array(82),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'eIyJoaNqgtFmKQMj',
				installs_count : 63,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -6030295599867079564,
			),
			msg_id : 45,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -2561309993543342750,
			peer : $client->peerUser(
				user_id : 4543043708627490502,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 66,
		),
		$client->updateDialogFilter(
			id : 70,
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
				id : 100,
				title : $client->textWithEntities(
					text : '1Ry9l2aOegstnGAL',
					entities : array(
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
				emoticon : 'SDuv3q5xYPcOBnem',
				color : 17,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(15),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 2428023351805815024,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -3736133135994054756,
			id : 3,
			forwards : 94,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -8197950122362763253,
			top_msg_id : 67,
			read_max_id : 47,
			broadcast_id : -2331322052419847361,
			broadcast_post : 65,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4503660799842760666,
			top_msg_id : 10,
			read_max_id : 78,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -4235250931530588304,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 5314954808626876983,
			top_msg_id : 61,
			from_id : $client->peerUser(
				user_id : -4915675108982691083,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -7189959024281397669,
			),
			messages : array(30),
			pts : 15,
			pts_count : 55,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 576911070430087208,
			messages : array(78),
			pts : 89,
			pts_count : 49,
		),
		$client->updateChat(
			chat_id : 7838570183940776532,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 2839997483366226611,
				access_hash : -6784272671636049503,
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
					peer : $client->peerUser(
						user_id : 2511942825278389991,
					),
					date : 82,
					active_date : 11,
					source : 45,
					volume : 88,
					about : 'SafMJ2bFZ5qxlDu3',
					raise_hand_rating : 8146959309248182679,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'CGi2NR0rABSHmUMx',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 49,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '1zpecKmaIXU3qD5C',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 82,
					),
					paid_stars_total : 8428126616499099429,
				),
			),
			version : 30,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -4377676217491519181,
			),
			call : $client->groupCallDiscarded(
				id : 6994327760491535347,
				access_hash : 3236689018977978076,
				duration : 96,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 2855346572762129408,
			),
			ttl_period : 59,
		),
		$client->updateChatParticipant(
			chat_id : 1542710629530226107,
			date : 95,
			actor_id : 23814001334010448,
			user_id : -5899572291750912497,
			prev_participant : $client->chatParticipant(
				user_id : 2811457785427551228,
				inviter_id : -1582284107196693555,
				date : 50,
			),
			new_participant : $client->chatParticipant(
				user_id : 1688645310118398479,
				inviter_id : 3790151010024289875,
				date : 8,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'pjKUkSeL1zGEdimF',
				admin_id : 4946611394677579976,
				date : 30,
				start_date : 19,
				expire_date : 76,
				usage_limit : 82,
				usage : 36,
				requested : 68,
				subscription_expired : 86,
				title : 'vMbzwR7cHCAjiQhW',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 31,
					amount : -1154351704946715228,
				),
			),
			qts : 88,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 130972224701456287,
			date : 40,
			actor_id : -6856728805830939163,
			user_id : -2298687077885393045,
			prev_participant : $client->channelParticipant(
				user_id : -2041641264368699847,
				date : 50,
				subscription_until_date : 83,
			),
			new_participant : $client->channelParticipant(
				user_id : 8837274416573154222,
				date : 49,
				subscription_until_date : 82,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'yMoYLuZiQlVD4C9T',
				admin_id : 7761963643141208627,
				date : 88,
				start_date : 49,
				expire_date : 9,
				usage_limit : 45,
				usage : 32,
				requested : 69,
				subscription_expired : 25,
				title : 'DsWJiFKMkzjcISwE',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 8,
					amount : 2300946896297697796,
				),
			),
			qts : 29,
		),
		$client->updateBotStopped(
			user_id : -6619049183430315309,
			date : 81,
			stopped : false,
			qts : 93,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : '7qBTAIvL01zdpFRC',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 4680967732276224406,
			),
			bot_id : -1401994453571624346,
			commands : array(
				$client->botCommand(
					command : '9hrETvBbN2znKpOq',
					description : 'hPDGwlXCvFUjd7YS',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -7224022929579583366,
			),
			requests_pending : 79,
			recent_requesters : array(-1052953050014809236),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4853931813404979233,
			),
			date : 94,
			user_id : -3968981923688734614,
			about : 'rfX5ISDh9wU2bJ8u',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'qpmDX0EToAJw8KkZ',
				admin_id : 313543053040725163,
				date : 14,
				start_date : 85,
				expire_date : 98,
				usage_limit : 83,
				usage : 34,
				requested : 5,
				subscription_expired : 10,
				title : 'PEnWJ0KZ5DwaQRGL',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 13,
					amount : -6407814921708118445,
				),
			),
			qts : 62,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -6076573053290394154,
			),
			msg_id : 33,
			top_msg_id : 67,
			saved_peer_id : $client->peerUser(
				user_id : -4793790928558840488,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 60,
						reaction : $client->reactionEmpty(...),
						count : 100,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 99,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 97,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 3047456199771695187,
		),
		$client->updateBotMenuButton(
			bot_id : 644041735630824647,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 6289284878084801865,
			),
			msg_id : 76,
			transcription_id : 7790652510865060479,
			text : 'xYEiQCUJO3oWehKg',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 7308482673030591752,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -8474079712452139237,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 8757064028617045534,
			),
			msg_id : 87,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 59,
					h : 87,
					thumb : $client->photoSizeEmpty(
						type : 'FDgxeq0i1wPGKdYN',
					),
					video_duration : 25,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -6610291310594215484,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 1038162160684021501,
			),
			story : $client->storyItemDeleted(
				id : 98,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -3386336214604308007,
			),
			max_id : 25,
		),
		$client->updateStoryID(
			id : 73,
			random_id : 4570411982665274175,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 79,
				cooldown_until_date : 16,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -3025421722236429967,
			),
			story_id : 1,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 4080502200631333598,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'lJ7dCOahjimrc3Ae',
				user_id : 8971710424903772313,
				giveaway_msg_id : 99,
				date : 4,
				expires : 21,
				used_gift_slug : 'Yg5e2X1Va4LQhJpR',
				multiplier : 45,
				stars : -7903164619609416639,
			),
			qts : 54,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 3577504629609342856,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 8438874169092484383,
			),
			wallpaper : $client->wallPaper(
				id : -4438415563404994141,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 5097890999632084619,
				slug : 'KbqDkhfpGZ9EIxmM',
				document : $client->documentEmpty(
					id : -758517441280232376,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 1,
					second_background_color : 15,
					third_background_color : 45,
					fourth_background_color : 94,
					intensity : 40,
					rotation : 21,
					emoticon : 'PzeJV89csBQEpqgf',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 4226103675138587522,
			),
			msg_id : 48,
			date : 71,
			actor : $client->peerUser(
				user_id : -2777133304633712165,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'ONRDeYdv3bq2HGXL',
				),
				$client->reactionCustomEmoji(
					document_id : -8118022743599934403,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Aaw5kdyBjlzDS3gZ',
				),
				$client->reactionCustomEmoji(
					document_id : 3839211605892884149,
				),
				$client->reactionPaid(),
			),
			qts : 80,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 5093986656672748661,
			),
			msg_id : 50,
			date : 40,
			reactions : array(
				$client->reactionCount(
					chosen_order : 42,
					reaction : $client->reactionEmpty(),
					count : 95,
				),
			),
			qts : 92,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 4857587653171253819,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -4853674510958840644,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 64,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '2tHsfcFjuiaZENn8',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 7,
					shortcut : 'NSqFUC4ys1WfhvXB',
					top_message : 51,
					count : 66,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 73,
				shortcut : '6MwcmSqnzEbs9Puv',
				top_message : 55,
				count : 75,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 6,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 60,
				peer_id : $client->peerUser(
					user_id : 133253934732857900,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 18,
			messages : array(71),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'lxvu1btfWROVGhYd',
				user_id : 4341329006141555634,
				dc_id : 29,
				date : 44,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 76,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'O8V3qRtSWCuf4QJh',
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(
					user_id : -16560838543524794,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(
					user_id : -2076915733871009530,
				),
			),
			qts : 3,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'YGbJrg1MBvFZxWNt',
			message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(
					user_id : -5929911322317973677,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : -8829514051843179627,
				),
			),
			qts : 37,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '4eO9CHGN1JsjwdgA',
			peer : $client->peerUser(
				user_id : -2334540467552081500,
			),
			messages : array(15),
			qts : 87,
		),
		$client->updateNewStoryReaction(
			story_id : 6,
			peer : $client->peerUser(
				user_id : -3417105149850163665,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 2321053299255326164,
				nanos : 78,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 5515737128647588423,
			user_id : 298404150346514308,
			connection_id : 'EHmnSFQ98jozDi6b',
			message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(
					user_id : -4347740338070953371,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(
					user_id : 545608193971357027,
				),
			),
			chat_instance : 5079997067206636331,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 298302409172358738,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 7451753133871971852,
					nanos : 57,
				),
				available_balance : $client->starsAmount(
					amount : 7400552852100233119,
					nanos : 36,
				),
				overall_revenue : $client->starsAmount(
					amount : 9222112441971523593,
					nanos : 8,
				),
				next_withdrawal_at : 27,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 1520135292206387062,
			payload : 'wrSBFWVmRkMu5vLo',
			qts : 49,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 83,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 89,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 5576643577170888800,
				access_hash : 5864332331269319260,
			),
			sub_chain_id : 27,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 57,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 7005666848545082797,
			saved_peer_id : $client->peerUser(
				user_id : -3136976884193709201,
			),
			read_max_id : 93,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 7918360294378923676,
			saved_peer_id : $client->peerUser(
				user_id : 7590058194088965926,
			),
			read_max_id : 93,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 1692262817872377173,
			saved_peer_id : $client->peerUser(
				user_id : 4012609607497989345,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -3364632549388416616,
				access_hash : -3975806272534663254,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 54,
				from_id : $client->peerUser(
					user_id : 3413733536284580693,
				),
				date : 74,
				message : $client->textWithEntities(
					text : 'c3uVRWXvdsOYJofG',
					entities : array(
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
				paid_message_stars : -4312788356311587977,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 5180119363676444522,
				access_hash : -3651913305691732560,
			),
			from_id : $client->peerUser(
				user_id : 9176105512233341982,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -654411596696445531,
			),
			topic_id : 100,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 681741279948463356,
			),
			order : array(36),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -3023430069014790648,
				access_hash : 8684175329615691252,
			),
			messages : array(23),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -2406066841438494818,
			state : $client->starGiftAuctionState(
				version : 29,
				start_date : 87,
				end_date : 60,
				min_bid_amount : 4173851409714166017,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 20,
						amount : 8150659234726456361,
						date : 17,
					),
				),
				top_bidders : array(2583417185229420574),
				next_round_at : 55,
				gifts_left : 56,
				current_round : 95,
				total_rounds : 64,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -7916988982693557647,
			text : 'YQXchJ2Sj7TMmFnv',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 1216421683453539405,
			payload : 'qHewvATuKWQGmMIp',
			until_date : 58,
			qts : 53,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 8477905425280433399,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 8011245004248130420,
				bid_date : 73,
				min_bid_amount : -8679773719574845427,
				peer : $client->peerUser(
					user_id : -4867166872156476275,
				),
				acquired_count : 26,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -6214698386275709747,
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
			id : -7060527144843320562,
			access_hash : 5154915635443259298,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VgsLdK7vqwNJbEP2',
					reason : 'eQvHhmIqbW5p9UTP',
					text : 'XFfvb21GMEhdArUx',
				),
			),
			bot_inline_placeholder : 'UNoIiy5AtDRcO34C',
			lang_code : 'dOfNx428KoGhXLak',
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
				max_id : 1,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 5249188143057066702,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : 3667917302927235834,
			),
			bot_active_users : 46,
			bot_verification_icon : -7597669126046591968,
			send_paid_messages_stars : -5508738276834885850,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4043357408090484243,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3901300700914912336,
			title : 'NKEJmL9ej6wU2C7o',
			photo : $client->chatPhotoEmpty(),
			participants_count : 65,
			date : 33,
			version : 85,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 55,
			),
		),
		$client->chatForbidden(
			id : 7868542777943046347,
			title : 'fBz9o12tlJAj7mZO',
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
			id : 4693328003100102471,
			access_hash : 4828954650687189360,
			title : 'nH5lkgjUf23O0zZ6',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '13rdsavcJj6VU9in',
					reason : 'DNWBHgZLf0P8aI5c',
					text : 'quTm6giLQFbr2WEp',
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
				until_date : 54,
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
				until_date : 39,
			),
			participants_count : 43,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 68,
			),
			color : $client->peerColor(
				color : 13,
				background_emoji_id : -47849698525436884,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : 5753868869978245155,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 65,
			subscription_until_date : 20,
			bot_verification_icon : -1141973247798797897,
			send_paid_messages_stars : -1492585194863376441,
			linked_monoforum_id : 6433366098275529891,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2120312309730274660,
			access_hash : 4244238247259332656,
			title : 'K3RjDMirHtBSC2zb',
			until_date : 58,
		),
	),
	date : 50,
	seq : 41,
);
```